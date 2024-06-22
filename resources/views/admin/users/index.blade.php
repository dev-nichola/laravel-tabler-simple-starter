<x-app-layout>
    <h1 class="text-2xl font-semibold"># Halaman User</h1>

    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card py-4 px-4">
                        <table id="tbl_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script type="text/javascript">
    $(document).ready(function () {
       $('#tbl_list').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url()->current() }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
    
            ]
        });
     });
    </script>
    @endpush
</x-app-layout>