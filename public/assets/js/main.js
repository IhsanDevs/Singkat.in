// Hapus data user

function DeleteUser(id) {
    $("#deleteConfirmModal").modal("show");

    $("#formDelete").attr("action", "/users/" + id);
}
