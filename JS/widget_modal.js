$(document).ready(function () {
    $("#detalhes_git, #detalhes_armazenados").dialog({
        autoOpen: false,
        modal: true,
        minWidth: 250,
        minHeight: 250,
        width: 'auto',
        heigth: 'auto',
        zIndex: 500,
        show: {
            effect: "drop",
            duration: 200
        },
        hide: {
            effect: "drop",
            duration: 200
        }
    });
});
