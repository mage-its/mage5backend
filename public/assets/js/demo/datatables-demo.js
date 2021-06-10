// waiting for document to be ready
$(document).ready(function() {
  // Call the dataTables jQuery plugin
  $('#dataTable').DataTable({
    "scrollX":true
  });
})

//onDelete Button click, show the delete confirmation modal
$(".DelBtn").click(function() {
  let timid = $(this).data("timid"); //save userId
  let namatim = $(this).data("namatim"); //save namatim
  $("#delBody").html(`Apakah Yakin akan menghapus <b>${namatim}</b> ?
    <input type="hidden" value="${timid}" name="timId" />`);
  $("#DelModal").modal(); //showing Modal
});

//onVerif Button click, showing modal to edit no peserta
$(".VerifBtn").click(function() {
  let timid = $(this).data("timid");
  let namatim= $(this).data("namatim");
  let nopeserta= $(this).data("nopeserta");
  $("#verifTitle").html(`Edit No Peserta Tim <b>${namatim}</b>`);
  $("#verifBody").html(`No Peserta
    <input type="text" name="noPeserta" value="${nopeserta}" required />
    <input type="hidden" name="timId" value="${timid}" />`)
  $("#VerifModal").modal();
});