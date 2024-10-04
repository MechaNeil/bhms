{{-- Do your work, then step back. --}}

@section('title', 'Payment')
@section('body-class', 'layout-fixed sidebar-expand-lg sidebar-mini bg-body-tertiary')
<!-- Defining a custom body class for the register page -->

<div class="app-wrapper">
  <!-- App wrapper starts here -->
  <!-- livewire components starts here -->
  <!-- begin::Header livewire -->
  <livewire:roles.owner.components.owner-header>
    <!-- begin::Sidebar livewire -->
    <livewire:roles.owner.components.owner-sidebar>
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0" style="display: flex; align-items: flex-end;">
                  <!-- Adjust the SVG size using width and height -->
                  <svg class="d-inline-block text-secondary"
                    style="margin-right: 8px; width: 38px; height: 38px; vertical-align: middle;" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                    <path fill-rule="evenodd"
                      d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                      clip-rule="evenodd" />
                    <path
                      d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />


                  </svg>
                  <span class="d-inline-block">Tenants Payment</span>
                </h3>

              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Manage</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Payment
                  </li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-6">
                        <div class="card">
                          <div class="card-body text-center" style="background-color: #007bff; color: white;">
                            <h5>Total Transactions</h5>
                            <h2>1</h2>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="card">
                          <div class="card-body text-center" style="background-color: #28a745; color: white;">
                            <h5>Total Amount Paid</h5>
                            <h2>4,500.00</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <!-- Data Visualization Section -->
<livewire:roles.owner.pages.reports.payment.payment-list-components.payment-chart>

                      <div class="card mb-4">
                          <div class="card-header">

                              <h3 class="card-title">Payment List</h3>


                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-hover table-bordered">
                                <thead class="table-mode">
                                  <tr>
                                    <th>Invoice Number</th>
                                    <th>Tenant Name</th>
                                    <th>Amount Paid</th>
                                    <th>Payment Date</th>
                                    <th>Payment Mode</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>2024-2-October</td>
                                    <td>Mak Nel Tevs</td>
                                    <td>3,000.00</td>
                                    <td>October 2, 2024</td>
                                    <td>
                                      <span data-bs-toggle="tooltip" title="Paid via cash">
                                        Cash
                                      </span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div> <!-- /.card-body -->
                          <div class="card-footer clearfix">
                              <ul class="pagination pagination-sm m-0 float-end">
                                  <li class="page-item"> <a class="page-link" href="#">«</a> </li>
                                  <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                  <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                  <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                  <li class="page-item"> <a class="page-link" href="#">»</a> </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div> <!-- /.container-fluid -->
      </div>
        <!--end::App Content-->
      </main>
      <livewire:roles.owner.components.owner-footer>
        <!--end::Footer livewire-->
        <div class="sidebar-overlay"></div>
        <!--end::App Main-->
        <!--begin::Footer-->
</div>