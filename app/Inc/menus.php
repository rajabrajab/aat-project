<?php

return [
    'admin' => [
         [
            'icon' => 'ph-house',
            'title' => 'لوحة التحكم',
            'url' => url('/dashboard'),
            'childs' => []
        ],
         [
            'icon' => 'ph-layout',
            'title' => 'الباقات',
            'url' => url('/dashboard/packages'),
            'childs' => []
        ],
         [
            'icon' => 'ph-hand-pointing',
            'title' => 'تصنيف الباقات',
            'url' => url('/dashboard/package_categories'),
            'childs' => []
        ],
         [
            'icon' => 'ph-swatches',
            'title' => 'المستخدمين',
            'url' => url('/dashboard/users'),
            'childs' => []
        ],
         [
            'icon' => 'ph-note-blank',
            'title' => 'الجهات',
            'url' => url('/dashboard/contacts'),
            'childs' => []
        ],
         [
            'icon' => 'ph-note-blank',
            'title' => 'الدعوات',
            'url' => url('/dashboard/invitations'),
            'childs' => []
        ],
         [
            'icon' => 'ph-note-blank',
            'title' => 'تصنيف الدعوات',
            'url' => url('/dashboard/invitation_categories'),
            'childs' => []
        ],
         [
            'icon' => 'ph-note-blank',
            'title' => 'المدفوعات',
            'url' => url('/dashboard/payments'),
            'childs' => []
        ],
         [
            'icon' => 'ph-note-blank',
            'title' => 'القوالب',
            'url' => url('/dashboard/templates'),
            'childs' => []
        ],
         [
            'icon' => 'ph-note-blank',
            'title' => 'حقول القوالب',
            'url' => url('/dashboard/template_fields'),
            'childs' => []
        ],
         [
            'icon' => 'ph-note-blank',
            'title' => 'الإعدادت',
            'url' => url('/dashboard/settings'),
            'childs' => []
        ],
    ]
    ];
