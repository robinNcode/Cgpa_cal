@extends('cgpaTest.layout')

@section('title','All students details - Cgpa Calculator')

@section('custom_style')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
@endsection

@section('content')
<h1 align="center"> Ajax CRUD </h1>
<div class="container mt-4 shadow-lg p-3 mb-5 bg-white rounded">
	 
    <legend class="bg-primary">
        <i class="fas fa-fw fa-briefcase"></i>All Student Details
    </legend>
   
    <div class="card-body border border-primary">
        <fieldset>
            <table class="table table-hover display nowrap mt-4" id="info_table">
            	<center>
            		<a id="add_data" type="button" class="btn btn-success shadow p-3 mb-5 bg-success rounded" ><i class="fas fa-user-plus"></i>  Add New Info</a>
            	</center>
                <thead>
                    <tr>
                        <th>Serial No.</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>Serial No.</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </fieldset>
    </div>
    <div class="card-footer">
    </div>

@include('cgpaTest.formModal')

@include('cgpaTest.UpdateModal')

@include('cgpaTest.ShowModal')

</div>
  
@endsection

@section('custom_script')

{{-- ................................... DATA table CDN ...................................... --}}
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
{{-- ................................... Sweet Alert CDN ...................................... --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  
let table1 = null;
	//........................Data Render Function Start Here .........................
$(document).ready(function() {

    table1 = $('#info_table').DataTable({

        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route ('allJson') }}"
        },
        columns: [{
                data: 'id',
                name: 'id',
                orderable: true
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'phone',
                name: 'phone'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });
});


//.......................To showing Modal start here .............................
$('#add_data').click(function() {

    save_method = 'add';
    $('input[name_method]').val('POST');
    $('#modal-form').modal('show');
    $('#modal-form form')[0].reset();
    $('#modalTitle').text('Add Student Info');
    $('#insert_button').text('Submit');

});

// ......................For inseting data using ajax ..........................
$('#student_form').on('submit', function(event) {

    event.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
        url: "{{route('ajaxdata.postdata')}}",
        method: "POST",
        data: form_data,
        dataType: "json",
        success: function(data) {
            table1.ajax.reload();
            $('#modal-form').modal('hide');
            if (data.status == true) {
                swal({
                    title: "Information inserted successfully!",
                    text: "You did a good job!",
                    icon: "success",
                    button: "Great !",
                });
            } else {
                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    timer: "2000"
                });
            }
        },
        error: function(data) {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                timer: "2000"
            });
        }
    })
});

// ......................For editing data using ajax ..........................

function editData(id) {
    //console.log("i am on edit data");
    save_method = 'edit';
    $('input[name_method]').val('PUT');
    $('#modal-form-update form')[0].reset();
    $.ajax({

        url: "{{url('editing')}}" + "/" + id + "/edit",
        type: "GET",
        dataType: "JSON",

        success: function(data) {

            $('#modal-form-update').modal('show');
            $('#modalTitleUpdate').text('Update Student Info');
            $('#insert_button_update').text('Update');

            $('#element_id').val(data.id);
            $('#name_update_id').val(data.name);
            $('#email_update_id').val(data.email);
            $('#phone_update_id').val(data.phone);

            },    
        error: function() {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: 'Ajax method is not Working!',
                timer: "4000"
            });
        }
    });
}

// ......................For upadated data using ajax ..........................
$('#student_update_form').on('submit', function(event) {
    
    event.preventDefault();

    var id = $(this).find('#element_id').val();
    //alert(id);
    var form_data = $(this).serialize();
    //console.log(form_data);
    $.ajax({
        url: "{{url('updating')}}" + "/" + id,
        method: "PUT",
        data: form_data,
        dataType: "json",

        success: function(data) {
            table1.ajax.reload();
            $('#modal-form-update').modal('hide');

            if (data.status == true) {
                swal({
                    title: "Updated successfully!",
                    text: "You did a good job!",
                    icon: "success",
                    button: "Great !",
                });
            } else {
                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    timer: "2000"
                });
            }
        },
        
    })
});

// ......................For Showing specified data from resource..........................
function showData(id) {
    $.ajax({

        url: "{{url('showing')}}" + "/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {

            $('#single_data').modal('show');
            $('#singletitle').text('Student Information');
            $('#id').text(data.id);
            $('#fullname').text(data.name);
            $('#emailshow').text(data.email);
            $('#phoneshow').text(data.phone);
        },

        error: function() {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                timer: "4000"
            });
        }
    });
}

//.......................For deleting a data from specified resource ..........................

function deleteData(id) {
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    swal({
            title: "Are you sure?",
            text: "Once deleted,you won't be able to recover this Information!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          //console.log(typeof willDelete);
            if (willDelete == true) {
                $.ajax({
                    url: "{{url('deleting')}}" + "/" + id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': csrf_token
                    },
                    success: function(data) {
                        table1.ajax.reload();
                        swal({
                            title: "Deleted Successfully!",
                            text: "You did a good job!",
                            icon: "success",
                            button: "Great !",
                        });
                    },
                    error: function(ajax) {
                        swal({
                            icon: 'error',
                            title: ajax.status,
                            text: ajax.responseText,
                            //timer: "4000"
                        });
                    }

                })

            } else {
                swal({
                title: 'Your information is safe!',
                timer: "2500"
            });
            }
        });
}
     
</script>
@endsection

