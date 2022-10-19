@extends('layouts.landlord-app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        Houses
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('landlord-dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Houses</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"> Add House</button>
        </div>
  </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List of Houses</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Number of houses</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Number of Houses</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                              </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add House</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="" id="loanvalueform" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input hidden="hidden" type="text" name="loan_id" class="form-control form-control-line" value="" placeholder=" Degree Name" minlength="1" required>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Amount pay</label>
                            <input type="number" name="install_amount" class="form-control" id="recipient-name1">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Receiver</label>
                            <input type="text" name="receiver" class="form-control" id="recipient-name1" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label"> Notes</label>
                            <textarea class="form-control" name="notes" id="message-text1"></textarea>
                        </div>
                    </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    <?= csrf_field() ?>
                </form>
            </div>
        </div>
    </div>
 </div>
 </div>
</section>
</div>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

@endsection