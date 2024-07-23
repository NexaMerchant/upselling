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


    <!-- jQuery -->
    <script src="/themes/manage/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/themes/manage/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</x-admin::layouts>
