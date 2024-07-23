<x-admin::layouts>
    <x-slot:title>
        @lang('Upselling::app.Admin.rules.create.title')
    </x-slot:title>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('Upselling::app.Admin.rules.create.title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">@lang('Upselling::app.Admin.rules.create.title')</li>
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
                            <h3 class="card-title">@lang('Upselling::app.Admin.rules.create.title')</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="createForm" method="POST" action="{{ route('Upselling.admin.rules.store')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="conditions_type">Conditions Type</label>
                                    <select class="form-control" id="conditions_type" name="conditions_type">
                                        <option value="1">All</option>
                                        <option value="0">Any</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="conditions">Conditions</label>
                                    <textarea class="form-control" id="conditions" name="conditions" rows="3" placeholder="Enter conditions"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="conditions_value">Condition Value</label>
                                    <input type="text" class="form-control" id="conditions_value" name="conditions_value" placeholder="Enter condition value">
                                </div>
                                    
                                    
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
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



    <!-- jQuery -->
    <script src="/themes/manage/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/themes/manage/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</x-admin::layouts>
