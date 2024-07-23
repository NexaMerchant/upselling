<x-admin::layouts>
    <x-slot:title>
        @lang('Upselling::app.Admin.rules.lists.view.title')
    </x-slot:title>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('Upselling::app.Admin.rules.lists.view.title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">@lang('Upselling::app.Admin.rules.lists.view.title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                
                  <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">@lang('Upselling::app.Admin.rules.lists.view.title')</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <button id="createButton">Create</button>
                        <table id="tables" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>updated at</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                          </tbody>
  
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
    </section>


     <!-- DataTables -->
  <link rel="stylesheet" href="/themes/manage/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/themes/manage/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/themes/manage/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- jQuery -->
    <script src="/themes/manage/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/themes/manage/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="/themes/manage/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/themes/manage/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/themes/manage/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/themes/manage/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/themes/manage/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/themes/manage/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/themes/manage/AdminLTE/plugins/jszip/jszip.min.js"></script>
    <script src="/themes/manage/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/themes/manage/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/themes/manage/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/themes/manage/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/themes/manage/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(function () {
          $("#tables").DataTable({
            autoWidth: true,
            keys: true,
            ajax: {
              url: "{{ route('Upselling.admin.rules.index') }}",
              type: 'GET'
            },
            columns: [
                {
                    data: 'id'
                },
              {
                data: 'name'
              },
              {
                data: 'status'
              },
              {
                data: 'updated_at'
              },
              {
                data: "id",
                render: function(data, type, row, meta) {
                  return '<a href="./lp/edit/'+data+'" class="btn btn-primary btn-sm">View</a> <a href="./lp/copy/'+data+'" class="btn btn-primary btn-sm">Copy</a>';
                }
              }
            ],
            lengthMenu: [
                [20, 50, 100],
                [20, 50, 100]
            ],
            order: [[0, 'desc']],
            processing: true,
            serverSide: true,
          });

          $('#createButton').on('click', function() {
            window.location.href = "{{ route('Upselling.admin.rules.create') }}";
         });
        
        });
      </script>

</x-admin::layouts>