$(function() {
    var table = $('#table-semester').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('admin.getDataListPlanStudy') !!}',
        columns: [
        { data: 'id', name: 'id' },
        { data: 'name', name: 'name' },
        { data: 'start', name: 'start' },
        { data: 'finish', name: 'finish ' },
        { defaultContent: '<button class="edit">Click{id}</button>'}
    ]
});

    $('#table-semester tbody').on('click', 'button.edit', function () {
        var data = table.row($(this).parents('tr')).data();
        console.log(data);
    } );
});