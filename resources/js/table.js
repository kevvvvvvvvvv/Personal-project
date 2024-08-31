
console.log("Hola");

$(document).ready(function() {
    $('#myTable').DataTable();
});

$(document).ready(function() {
    $('#myTable').DataTable({
        paging: true,
        searching: true,
        ordering: true,
        info: true
    });
});
