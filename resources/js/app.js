require('./bootstrap');
import Swal from 'sweetalert2';

window.deleteConfirm = function (id) {
    Swal.fire({
        icon: 'warning',
        text: 'Do you want to delete this?',
        showCancelButton: true,
        confirmButtonText: 'Delete',
        confirmButtonColor: '#e3342f',
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "/admin/herbs/delete/" + id;
        }
    });
}
