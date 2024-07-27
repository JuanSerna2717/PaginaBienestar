
function closeForm() {
    document.getElementById('formRequisitos').style.display = 'none';
}
document.getElementById('btn-abrir-formulario').addEventListener('click', function () {
    document.getElementById('formulario').showModal();
});

document.getElementById('close-form').addEventListener('click', function () {
    document.getElementById('formulario').close();
});