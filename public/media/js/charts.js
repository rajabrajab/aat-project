function getData() {
  return [
    { asset: "الذكور الحاضرين", amount: 60 },
    { asset: "الاناث الحاضرين", amount: 40 },
  ];
}
const { AgCharts } = agCharts;

const options = {
  container: document.getElementById("AttendanceRate"),
  data: getData(),

  series: [
    {
      type: "donut",

      angleKey: "amount",
      innerRadiusRatio: 0.7,
      fills: ["#4621d5", "#ff7f0e"],

      sectorLabelKey: "amount",
    },
  ],

  tooltip: {
    tracking: false,
    position: {
      x: 0,
      y: 0,
    },
  },
};

AgCharts.create(options);

/////

function getFamily1Data() {
  return [
    { category: "حضروا", value: 75 },
    { category: "لم يحضروا", value: 25 },
  ];
}

const family1Options = {
  container: document.getElementById("familyDonutChart1"),
  data: getFamily1Data(),
  series: [
    {
      type: "donut",
      angleKey: "value",
      innerRadiusRatio: 0.7,
      fills: ["#4621d5", "#e0e0e0"],
      innerLabels: [
        {
          text: "75%",
          fontSize: 14,
          fontWeight: 400,
          color: "#4621d5",
        },
      ],
    },
  ],
  legend: {
    enabled: false,
  },
};

AgCharts.create(family1Options);
////

function getFamily2Data() {
  return [
    { category: "حضروا", value: 25 },
    { category: "لم يحضروا", value: 75 },
  ];
}

const family2Options = {
  container: document.getElementById("familyDonutChart2"),
  data: getFamily2Data(),
  series: [
    {
      type: "donut",
      angleKey: "value",
      innerRadiusRatio: 0.7,
      fills: ["#4621d5", "#e0e0e0"],
      innerLabels: [
        {
          text: "25%",
          fontSize: 14,
          fontWeight: 400,
          color: "#4621d5",
        },
      ],
    },
  ],
  legend: {
    enabled: false,
  },
};

AgCharts.create(family2Options);

/////

function getFamily3Data() {
  return [
    { category: "حضروا", value: 40 },
    { category: "لم يحضروا", value: 60 },
  ];
}

const family3Options = {
  container: document.getElementById("familyDonutChart3"),
  data: getFamily3Data(),
  series: [
    {
      type: "donut",
      angleKey: "value",
      innerRadiusRatio: 0.7,
      fills: ["#4621d5", "#e0e0e0"],
      innerLabels: [
        {
          text: "40%",
          fontSize: 14,
          fontWeight: 400,
          color: "#4621d5",
        },
      ],
    },
  ],
  legend: {
    enabled: false,
  },
};

AgCharts.create(family3Options);

///ages

function getAge1Data() {
  return [
    { category: "حضروا", value: 40 },
    { category: "لم يحضروا", value: 60 },
  ];
}

const age1Options = {
  container: document.getElementById("ageDonutChart1"),
  data: getAge1Data(),
  series: [
    {
      type: "donut",
      angleKey: "value",
      innerRadiusRatio: 0.7,
      fills: ["#4621d5", "#e0e0e0"],
      innerLabels: [
        {
          text: "40%",
          fontSize: 14,
          fontWeight: 400,
          color: "#4621d5",
        },
      ],
    },
  ],
  legend: {
    enabled: false,
  },
};

AgCharts.create(age1Options);

///

function getAge2Data() {
  return [
    { category: "حضروا", value: 20 },
    { category: "لم يحضروا", value: 80 },
  ];
}

const age2Options = {
  container: document.getElementById("ageDonutChart2"),
  data: getAge2Data(),
  series: [
    {
      type: "donut",
      angleKey: "value",
      innerRadiusRatio: 0.7,
      fills: ["#4621d5", "#e0e0e0"],
      innerLabels: [
        {
          text: "20%",
          fontSize: 14,
          fontWeight: 400,
          color: "#4621d5",
        },
      ],
    },
  ],
  legend: {
    enabled: false,
  },
};

AgCharts.create(age2Options);

////

function getAge3Data() {
  return [
    { category: "حضروا", value: 10 },
    { category: "لم يحضروا", value: 90 },
  ];
}

const age3Options = {
  container: document.getElementById("ageDonutChart3"),
  data: getAge3Data(),
  series: [
    {
      type: "donut",
      angleKey: "value",
      innerRadiusRatio: 0.7,
      fills: ["#4621d5", "#e0e0e0"],
      innerLabels: [
        {
          text: "10%",
          fontSize: 14,
          fontWeight: 400,
          color: "#4621d5",
        },
      ],
    },
  ],
  legend: {
    enabled: false,
  },
};

AgCharts.create(age3Options);
