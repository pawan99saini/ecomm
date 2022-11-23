<?php $__env->startPush('stylesheet'); ?>
<style>
    .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
    }

    .switch input {
    opacity: 0;
    width: 0;
    height: 0;
    }

    .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
    }

    .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    }

    input:checked + .slider {
    background-color: #2196F3;
    }

    input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
    border-radius: 34px;
    }

    .slider.round:before {
    border-radius: 50%;
    }

    #toast-container{
        margin-top : 20px;
    }

    #toast-container > .toast {
    width: 370px !important;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        Orders <?php echo e(trans('global.list')); ?>

    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-orders">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>
                        #
                    </th>
                    <th>
                        Order ID
                    </th>

                    <th>
                        Customer
                    </th>
                    <th>
                        Amount
                    </th>
                    <th>
                        Transaction ID
                    </th>
                    <th>
                        Payment Type
                    </th>
                    <th>
                        View Order
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
<script>
    $(function () {
      $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            let dtOverrideGlobals = {
                buttons: dtButtons,
                processing: true,
                serverSide: true,
                retrieve: true,
                aaSorting: [],
                ajax: "<?php echo e(url('/backoffice/transactions')); ?>",
                columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                { data: 'order', name: 'order' },
                { data: 'user', name: 'user'},
                { data: 'amount', name: 'amount' },
                { data: 'transaction', name: 'transaction' },
                { data: 'payment', name: 'payment' },
                { data: 'action', name: 'action' },
                ],
                orderCellsTop: true,
                order: [[ 1, 'desc' ]],
                pageLength: 25,
            };
            var table = $('.datatable-orders').DataTable(dtOverrideGlobals);


            $(document).on('change','#order-status', function(){
               var status_id = $(this).val();
               var order_id = $(this).attr('data-id');

               $.ajax({
                   type: "PATCH",
                   url: `<?php echo e(url('backoffice/orders/status')); ?>/${order_id}`,
                   data: {
                       status_id : status_id,
                       order_id : order_id,
                       _token:'<?php echo e(csrf_token()); ?>',
                   },
                   cache: false,
                   success: function (response) {

                       console.log(response);
                    toastr.success('Success!', response.message,{
                        positionClass: 'toast-top-center',
                        iconClass:'toast-success',
                    });
                    table.ajax.reload(null, false);
                   },
                   error : function(err){
                       toastr.error('Error!', 'Internal server error!',{
                            positionClass: 'toast-top-center',
                            iconClass:'toast-success',
                        });
                   }
               });
            });



            $(document).on('click','#order-trash', function(){
               var order_id = $(this).attr('data-id');

               $.ajax({
                   type: "delete",
                   url: `<?php echo e(url('backoffice/orders/delete')); ?>/${order_id}`,
                   data: {
                       order_id : order_id,
                       _token:'<?php echo e(csrf_token()); ?>',
                   },
                   cache: false,
                   success: function (response) {
                    console.log(response);
                    toastr.success('Success!', response.message,{
                        positionClass: 'toast-top-center',
                        iconClass:'toast-success',
                    });
                    table.ajax.reload(null, false);
                   },
                   error : function(err){
                       toastr.error('Error!', 'Internal server error!',{
                            positionClass: 'toast-top-center',
                            iconClass:'toast-success',
                        });
                   }
               });
            });

        $(function(){
            <?php if(request()->has('id')): ?>
               var id = "<?php echo e(request()->get('id')); ?>";
               $(document).find('input[type=search]').val(id);
               $(document).find('input[type=search]').trigger("keyup");
            <?php endif; ?>
        })

    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/daylist/public_html/resources/views/admin/transaction/index.blade.php ENDPATH**/ ?>