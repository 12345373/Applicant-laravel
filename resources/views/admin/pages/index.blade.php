
@extends('admin.layouts.app')

@section("content")
<div class="container-fluid p-4">
  <!-- Page Header -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <h1 class="h3 mb-0 text-gray-800">HR Dashboard</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent p-0 mb-0">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </nav>
    </div>
    <div>
      <button class="btn btn-primary shadow-sm">
        <i class="bi bi-plus-circle me-1"></i> New Job Opening
      </button>
    </div>
  </div>

  <!-- Stats Cards Row -->
  <div class="row g-4 mb-4">
    <!-- Applicants Card -->
    <div class="col-xl-3 col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <div class="d-flex flex-column">
              <h6 class="text-uppercase text-muted fw-normal mb-1">Applicants</h6>
              <h2 class="h1 mb-0 fw-bold">248</h2>
            </div>
            <div class="rounded-circle bg-primary bg-opacity-10 p-3">
              <i class="bi bi-people text-primary fs-4"></i>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <span class="badge bg-success-subtle text-success me-2">+12%</span>
            <span class="text-muted small">from last month</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Interviews Card -->
    <div class="col-xl-3 col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <div class="d-flex flex-column">
              <h6 class="text-uppercase text-muted fw-normal mb-1">Interviews</h6>
              <h2 class="h1 mb-0 fw-bold">45</h2>
            </div>
            <div class="rounded-circle bg-success bg-opacity-10 p-3">
              <i class="bi bi-calendar-check text-success fs-4"></i>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <span class="badge bg-success-subtle text-success me-2">+8%</span>
            <span class="text-muted small">from last month</span>
          </div>
        </div>
      </div>
    </div>

    <!-- CV Reviews Card -->
    <div class="col-xl-3 col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <div class="d-flex flex-column">
              <h6 class="text-uppercase text-muted fw-normal mb-1">CV Reviews</h6>
              <h2 class="h1 mb-0 fw-bold">72</h2>
            </div>
            <div class="rounded-circle bg-warning bg-opacity-10 p-3">
              <i class="bi bi-file-earmark-text text-warning fs-4"></i>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <span class="badge bg-danger-subtle text-danger me-2">-3%</span>
            <span class="text-muted small">from last month</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Hired Card -->
    <div class="col-xl-3 col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <div class="d-flex flex-column">
              <h6 class="text-uppercase text-muted fw-normal mb-1">Hired</h6>
              <h2 class="h1 mb-0 fw-bold">18</h2>
            </div>
            <div class="rounded-circle bg-info bg-opacity-10 p-3">
              <i class="bi bi-person-check text-info fs-4"></i>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <span class="badge bg-success-subtle text-success me-2">+5%</span>
            <span class="text-muted small">from last month</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-4">
    <!-- Left Column -->
    <div class="col-lg-8">
      {{-- <!-- Application Analytics Chart -->
      <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">Application Analytics</h5>
          <div class="dropdown">
            <button class="btn btn-sm btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
              Monthly
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Weekly</a></li>
              <li><a class="dropdown-item" href="#">Monthly</a></li>
              <li><a class="dropdown-item" href="#">Yearly</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div id="reportsChart" style="min-height: 350px;"></div>
          <script>
            document.addEventListener("DOMContentLoaded", () => {
              var ApexCharts = ApexCharts;
              var series = [{
                  name: 'Applications',
                  data: [31, 40, 28, 51, 42, 82, 56],
                }, {
                  name: 'Interviews',
                  data: [11, 32, 45, 32, 34, 52, 41]
                }, {
                  name: 'Hired',
                  data: [15, 11, 32, 18, 9, 24, 11]
                }];
              var height = 350;
              var show = false;
              var borderColor = '#f1f1f1';
              var size = 4;
              new ApexCharts(document.querySelector("#reportsChart"), {
                series: series,
                chart: {
                  height: height,
                  type: 'area',
                  toolbar: {
                    show: show
                  },
                  fontFamily: 'Inter, sans-serif',
                },
                grid: {
                  borderColor: borderColor,
                  strokeDashArray: 4,
                },
                markers: {
                  size: size,
                  strokeWidth: 0,
                  hover: {
                    size: 6
                  }
                },
                colors: ['#6366f1', '#10b981', '#f59e0b'],
                fill: {
                  type: "gradient",
                  gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.3,
                    opacityTo: 0.1,
                    stops: [0, 90, 100]
                  }
                },
                dataLabels: {
                  enabled: false
                },
                stroke: {
                  curve: 'smooth',
                  width: 2
                },
                xaxis: {
                  type: 'datetime',
                  categories: ["2024-09-19T00:00:00.000Z", "2024-10-19T00:00:00.000Z", "2024-11-19T00:00:00.000Z", "2024-12-19T00:00:00.000Z", "2025-01-19T00:00:00.000Z", "2025-02-19T00:00:00.000Z", "2025-03-19T00:00:00.000Z"]
                },
                tooltip: {
                  x: {
                    format: 'dd MMM yyyy'
                  },
                }
              }).render();
            });
          </script>
        </div>
      </div> --}}

      <!-- Recent Applicants Table -->
      <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">Recent Applicants</h5>
          <div class="dropdown">
            <button class="btn btn-sm btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
              Today
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Week</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-hover align-middle">
              <thead class="bg-light">
                <tr>
                  <th class="ps-4">#</th>
                  <th>Applicant</th>
                  <th>Position</th>
                  <th>Applied Date</th>
                  <th>Status</th>
                  <th class="text-end pe-4">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="ps-4">#2457</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-2 bg-primary-subtle rounded-circle">SJ</div>
                      <span>Sarah Johnson</span>
                    </div>
                  </td>
                  <td>Frontend Developer</td>
                  <td>Apr 24, 2025</td>
                  <td><span class="badge rounded-pill bg-warning-subtle text-warning">CV Review</span></td>
                  <td class="text-end pe-4">
                    <button class="btn btn-sm btn-light"><i class="bi bi-eye"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4">#2147</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-2 bg-success-subtle rounded-circle">MB</div>
                      <span>Michael Brown</span>
                    </div>
                  </td>
                  <td>UX Designer</td>
                  <td>Apr 23, 2025</td>
                  <td><span class="badge rounded-pill bg-success-subtle text-success">Interview</span></td>
                  <td class="text-end pe-4">
                    <button class="btn btn-sm btn-light"><i class="bi bi-eye"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4">#2049</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-2 bg-info-subtle rounded-circle">ED</div>
                      <span>Emily Davis</span>
                    </div>
                  </td>
                  <td>Product Manager</td>
                  <td>Apr 22, 2025</td>
                  <td><span class="badge rounded-pill bg-success-subtle text-success">Hired</span></td>
                  <td class="text-end pe-4">
                    <button class="btn btn-sm btn-light"><i class="bi bi-eye"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4">#2644</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-2 bg-danger-subtle rounded-circle">AW</div>
                      <span>Alex Wilson</span>
                    </div>
                  </td>
                  <td>Backend Developer</td>
                  <td>Apr 21, 2025</td>
                  <td><span class="badge rounded-pill bg-danger-subtle text-danger">Rejected</span></td>
                  <td class="text-end pe-4">
                    <button class="btn btn-sm btn-light"><i class="bi bi-eye"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4">#2764</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-2 bg-warning-subtle rounded-circle">JL</div>
                      <span>Jessica Lee</span>
                    </div>
                  </td>
                  <td>Marketing Specialist</td>
                  <td>Apr 20, 2025</td>
                  <td><span class="badge rounded-pill bg-warning-subtle text-warning">CV Review</span></td>
                  <td class="text-end pe-4">
                    <button class="btn btn-sm btn-light"><i class="bi bi-eye"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer bg-transparent border-0 text-center">
          <a href="#" class="text-decoration-none">View all applicants</a>
        </div>
      </div>

      <!-- Upcoming Interviews Table -->
      <div class="card border-0 shadow-sm">
        <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">Upcoming Interviews</h5>
          <div class="dropdown">
            <button class="btn btn-sm btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
              This Week
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Week</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-hover align-middle">
              <thead class="bg-light">
                <tr>
                  <th class="ps-4">ID</th>
                  <th>Candidate</th>
                  <th>Position</th>
                  <th>Date & Time</th>
                  <th>Type</th>
                  <th class="text-end pe-4">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="ps-4">#INT-124</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-2 bg-primary-subtle rounded-circle">MB</div>
                      <span>Michael Brown</span>
                    </div>
                  </td>
                  <td>UX Designer</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-calendar-event me-2 text-muted"></i>
                      Apr 27, 10:00 AM
                    </div>
                  </td>
                  <td><span class="badge rounded-pill bg-primary-subtle text-primary">Technical</span></td>
                  <td class="text-end pe-4">
                    <button class="btn btn-sm btn-primary">Join</button>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4">#INT-125</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-2 bg-success-subtle rounded-circle">JS</div>
                      <span>Jennifer Smith</span>
                    </div>
                  </td>
                  <td>Data Analyst</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-calendar-event me-2 text-muted"></i>
                      Apr 27, 2:00 PM
                    </div>
                  </td>
                  <td><span class="badge rounded-pill bg-info-subtle text-info">HR</span></td>
                  <td class="text-end pe-4">
                    <button class="btn btn-sm btn-primary">Join</button>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4">#INT-126</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-2 bg-warning-subtle rounded-circle">RT</div>
                      <span>Robert Taylor</span>
                    </div>
                  </td>
                  <td>Project Manager</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-calendar-event me-2 text-muted"></i>
                      Apr 28, 9:30 AM
                    </div>
                  </td>
                  <td><span class="badge rounded-pill bg-success-subtle text-success">Final</span></td>
                  <td class="text-end pe-4">
                    <button class="btn btn-sm btn-primary">Join</button>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4">#INT-127</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-2 bg-danger-subtle rounded-circle">LW</div>
                      <span>Lisa Wang</span>
                    </div>
                  </td>
                  <td>Software Engineer</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-calendar-event me-2 text-muted"></i>
                      Apr 28, 1:00 PM
                    </div>
                  </td>
                  <td><span class="badge rounded-pill bg-primary-subtle text-primary">Technical</span></td>
                  <td class="text-end pe-4">
                    <button class="btn btn-sm btn-primary">Join</button>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4">#INT-128</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-2 bg-info-subtle rounded-circle">DM</div>
                      <span>David Miller</span>
                    </div>
                  </td>
                  <td>Content Writer</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-calendar-event me-2 text-muted"></i>
                      Apr 29, 11:00 AM
                    </div>
                  </td>
                  <td><span class="badge rounded-pill bg-info-subtle text-info">HR</span></td>
                  <td class="text-end pe-4">
                    <button class="btn btn-sm btn-primary">Join</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer bg-transparent border-0 text-center">
          <a href="#" class="text-decoration-none">View all interviews</a>
        </div>
      </div>
    </div>

    <!-- Right Column -->
    <div class="col-lg-4">
      <!-- Position Statistics -->
      {{-- <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">Applications by Position</h5>
          <div class="dropdown">
            <button class="btn btn-sm btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
              This Month
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">This Week</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div id="trafficChart" style="min-height: 300px;"></div>
          <script>
            document.addEventListener("DOMContentLoaded", () => {
              var echarts = echarts;
              echarts.init(document.querySelector("#trafficChart")).setOption({
                tooltip: {
                  trigger: 'item'
                },
                legend: {
                  bottom: '0',
                  left: 'center',
                  itemWidth: 12,
                  itemHeight: 12,
                  textStyle: {
                    fontSize: 12
                  }
                },
                series: [{
                  name: 'Applications',
                  type: 'pie',
                  radius: ['45%', '75%'],
                  avoidLabelOverlap: false,
                  itemStyle: {
                    borderRadius: 4,
                    borderColor: '#fff',
                    borderWidth: 2
                  },
                  label: {
                    show: false
                  },
                  emphasis: {
                    label: {
                      show: true,
                      fontSize: '14',
                      fontWeight: 'bold'
                    }
                  },
                  labelLine: {
                    show: false
                  },
                  data: [{
                      value: 35,
                      name: 'Frontend Developer',
                      itemStyle: { color: '#6366f1' }
                    },
                    {
                      value: 24,
                      name: 'Backend Developer',
                      itemStyle: { color: '#10b981' }
                    },
                    {
                      value: 18,
                      name: 'UX Designer',
                      itemStyle: { color: '#f59e0b' }
                    },
                    {
                      value: 15,
                      name: 'Project Manager',
                      itemStyle: { color: '#ef4444' }
                    },
                    {
                      value: 8,
                      name: 'Marketing Specialist',
                      itemStyle: { color: '#8b5cf6' }
                    }
                  ]
                }]
              });
            });
          </script>
        </div>
      </div> --}}

      <!-- Department Report -->
      {{-- <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">Department Hiring Report</h5>
          <div class="dropdown">
            <button class="btn btn-sm btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
              This Quarter
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Quarter</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div id="budgetChart" style="min-height: 300px;"></div>
          <script>
            document.addEventListener("DOMContentLoaded", () => {
              var echarts = echarts;
              var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                legend: {
                  bottom: '0',
                  left: 'center',
                  itemWidth: 12,
                  itemHeight: 12,
                  textStyle: {
                    fontSize: 12
                  }
                },
                radar: {
                  radius: '70%',
                  splitNumber: 5,
                  axisName: {
                    color: '#666',
                    fontSize: 12
                  },
                  splitArea: {
                    areaStyle: {
                      color: ['rgba(255, 255, 255, 0.05)', 'rgba(0, 0, 0, 0.02)']
                    }
                  },
                  indicator: [{
                      name: 'Engineering',
                      max: 20
                    },
                    {
                      name: 'Design',
                      max: 20
                    },
                    {
                      name: 'Marketing',
                      max: 20
                    },
                    {
                      name: 'HR',
                      max: 20
                    },
                    {
                      name: 'Finance',
                      max: 20
                    },
                    {
                      name: 'Product',
                      max: 20
                    }
                  ]
                },
                series: [{
                  name: 'Department Hiring',
                  type: 'radar',
                  data: [{
                      value: [15, 8, 5, 3, 6, 12],
                      name: 'Open Positions',
                      symbol: 'circle',
                      symbolSize: 6,
                      lineStyle: {
                        width: 2
                      },
                      areaStyle: {
                        opacity: 0.3
                      },
                      itemStyle: {
                        color: '#6366f1'
                      }
                    },
                    {
                      value: [7, 5, 4, 2, 3, 6],
                      name: 'Filled Positions',
                      symbol: 'circle',
                      symbolSize: 6,
                      lineStyle: {
                        width: 2
                      },
                      areaStyle: {
                        opacity: 0.3
                      },
                      itemStyle: {
                        color: '#10b981'
                      }
                    }
                  ]
                }]
              });
            });
          </script>
        </div>
      </div> --}}

      <!-- CV Review Pending Widget -->
      <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">Pending CV Reviews</h5>
          <div class="dropdown">
            <button class="btn btn-sm btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
              Today
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Week</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body p-0">
          <ul class="list-group list-group-flush">
            <li class="list-group-item border-0 py-3">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm bg-warning-subtle text-warning rounded-circle me-3">SJ</div>
                <div class="flex-grow-1">
                  <h6 class="mb-0">Sarah Johnson</h6>
                  <p class="text-muted small mb-0">Frontend Developer</p>
                </div>
                <span class="badge bg-light text-muted">2 hrs</span>
              </div>
            </li>
            <li class="list-group-item border-0 py-3">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm bg-warning-subtle text-warning rounded-circle me-3">JW</div>
                <div class="flex-grow-1">
                  <h6 class="mb-0">James Wilson</h6>
                  <p class="text-muted small mb-0">DevOps Engineer</p>
                </div>
                <span class="badge bg-light text-muted">3 hrs</span>
              </div>
            </li>
            <li class="list-group-item border-0 py-3">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm bg-warning-subtle text-warning rounded-circle me-3">OC</div>
                <div class="flex-grow-1">
                  <h6 class="mb-0">Olivia Chen</h6>
                  <p class="text-muted small mb-0">UI/UX Designer</p>
                </div>
                <span class="badge bg-light text-muted">5 hrs</span>
              </div>
            </li>
            <li class="list-group-item border-0 py-3">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm bg-warning-subtle text-warning rounded-circle me-3">MA</div>
                <div class="flex-grow-1">
                  <h6 class="mb-0">Mohammed Ahmed</h6>
                  <p class="text-muted small mb-0">Data Engineer</p>
                </div>
                <span class="badge bg-light text-muted">1 day</span>
              </div>
            </li>
            <li class="list-group-item border-0 py-3">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm bg-warning-subtle text-warning rounded-circle me-3">JL</div>
                <div class="flex-grow-1">
                  <h6 class="mb-0">Jessica Lee</h6>
                  <p class="text-muted small mb-0">Marketing Specialist</p>
                </div>
                <span class="badge bg-light text-muted">2 days</span>
              </div>
            </li>
          </ul>
        </div>
        <div class="card-footer bg-transparent border-0 text-center">
          <a href="#" class="text-decoration-none">Review all CVs</a>
        </div>
      </div>

      <!-- Latest Job Openings -->
      <div class="card border-0 shadow-sm">
        <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">Latest Job Openings</h5>
          <div class="dropdown">
            <button class="btn btn-sm btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
              Today
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Week</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body p-0">
          <ul class="list-group list-group-flush">
            <li class="list-group-item border-0 py-3">
              <div class="d-flex align-items-center">
                <div class="rounded-circle p-2 bg-primary-subtle text-primary me-3">
                  <i class="bi bi-code-slash"></i>
                </div>
                <div>
                  <h6 class="mb-1">Senior Frontend Developer</h6>
                  <p class="text-muted small mb-0">Remote · Full-time · 3+ years experience</p>
                </div>
              </div>
            </li>
            <li class="list-group-item border-0 py-3">
              <div class="d-flex align-items-center">
                <div class="rounded-circle p-2 bg-success-subtle text-success me-3">
                  <i class="bi bi-brush"></i>
                </div>
                <div>
                  <h6 class="mb-1">UI/UX Designer</h6>
                  <p class="text-muted small mb-0">Hybrid · Full-time · 2+ years experience</p>
                </div>
              </div>
            </li>
            <li class="list-group-item border-0 py-3">
              <div class="d-flex align-items-center">
                <div class="rounded-circle p-2 bg-warning-subtle text-warning me-3">
                  <i class="bi bi-server"></i>
                </div>
                <div>
                  <h6 class="mb-1">DevOps Engineer</h6>
                  <p class="text-muted small mb-0">On-site · Full-time · 4+ years experience</p>
                </div>
              </div>
            </li>
            <li class="list-group-item border-0 py-3">
              <div class="d-flex align-items-center">
                <div class="rounded-circle p-2 bg-danger-subtle text-danger me-3">
                  <i class="bi bi-building"></i>
                </div>
                <div>
                  <h6 class="mb-1">Product Manager</h6>
                  <p class="text-muted small mb-0">Remote · Full-time · 5+ years experience</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="card-footer bg-transparent border-0 text-center">
          <a href="#" class="btn btn-primary btn-sm">Post New Job</a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", () => {
  var ApexCharts = ApexCharts;
  var series = [{
      name: 'Applications',
      data: [31, 40, 28, 51, 42, 82, 56],
    }, {
      name: 'Interviews',
      data: [11, 32, 45, 32, 34, 52, 41]
    }, {
      name: 'Hired',
      data: [15, 11, 32, 18, 9, 24, 11]
    }];
  var height = 350;
  var show = false;
  var borderColor = '#f1f1f1';
  var size = 4;
  var type = 'gradient';
  var shadeIntensity = 1;
  var enabled = false;
  var curve = 'smooth';
  var x = {
      format: 'dd MMM yyyy'
                  },
                }
              }).render();
            });
          </script>
        </div>
      </div>
@endsection
