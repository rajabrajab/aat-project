<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\UserPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PackageController extends Controller
{
    /**
     * Show the packages information view with the logged-in user's packages.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();
        $userPackages = UserPackage::where('user_id', $user->id)->with('package')->get();

        return view('userboard.packages.index', compact('userPackages'));
    }

    /**
     * Change the chosen package for the logged-in user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeChosenPackage(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
        ]);

        $user = Auth::user();

        try {
            $userPackage = UserPackage::firstOrNew(['user_id' => $user->id]);
            $userPackage->package_id = $request->package_id;
            $userPackage->save();

            return redirect()->back()->with('status', 'Package changed successfully!');
        } catch (\Exception $e) {
            Log::error("Error changing package: {$e->getMessage()}");
            return redirect()->back()->with('error', 'Failed to change package.');
        }
    }

    /**
     * Increase the number of invitees for a user's package.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function increasePackageInvitessNumber(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
            'increment' => 'required|integer|min:1',
        ]);

        $user = Auth::user();

        try {
            $userPackage = UserPackage::where('user_id', $user->id)
                ->where('package_id', $request->package_id)
                ->firstOrFail();

            $userPackage->invitees_count += $request->increment;
            $userPackage->save();

            return redirect()->back()->with('status', 'Invitees number increased successfully!');
        } catch (\Exception $e) {
            Log::error("Error increasing invitees number: {$e->getMessage()}");
            return redirect()->back()->with('error', 'Failed to increase invitees number.');
        }
    }

    /**
     * Cancel the chosen package for the logged-in user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cancelChosenPackage(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
        ]);

        $user = Auth::user();

        try {
            $userPackage = UserPackage::where('user_id', $user->id)
                ->where('package_id', $request->package_id)
                ->firstOrFail();

            $userPackage->delete();

            return redirect()->back()->with('status', 'Package canceled successfully!');
        } catch (\Exception $e) {
            Log::error("Error canceling package: {$e->getMessage()}");
            return redirect()->back()->with('error', 'Failed to cancel package.');
        }
    }

    /**
     * Show the page to book a package.
     *
     * @return \Illuminate\View\View
     */
    public function bookPackageShow()
    {
        $packages = Package::where('status', 'active')->get();

        return view('packages.book', compact('packages'));
    }

    /**
     * Book a package for the logged-in user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function bookPackage(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
        ]);

        $user = Auth::user();

        try {
            $userPackage = new UserPackage();
            $userPackage->user_id = $user->id;
            $userPackage->package_id = $request->package_id;
            $userPackage->save();

            return redirect('/packages/success')->with('status', 'Package booked successfully!');
        } catch (\Exception $e) {
            Log::error("Error booking package: {$e->getMessage()}");
            return redirect()->back()->with('error', 'Failed to book package.');
        }
    }
}
