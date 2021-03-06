<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>

<script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

<script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/searchpanes/2.0.0/js/dataTables.searchPanes.min.js"></script>

<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/colreorder/1.5.5/js/dataTables.colReorder.min.js"></script>

<script src="https://cdn.datatables.net/plug-ins/1.11.5/api/column().title().js"></script>

<script>
    $(function () {
        function urlChange(table, url) {
            table.ajax.url(url).load();
        }

        function currencyFormatDE(num) {
            return (
                num
                    .toFixed(0) // always two decimal digits
                    .replace('.', ',') // replace decimal point character with ,
                    .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
            ) // use . as a separator
        }

        $.extend( true, $.fn.dataTable.defaults, {
            language: {
                "emptyTable": <?php echo "'" . App\Classes\langClass::trans("Nincs rendelkez??sre ??ll?? adat") . "'"; ?>,
                "info": <?php echo "'" . App\Classes\langClass::trans("Tal??latok: _START_ - _END_ ??sszesen: _TOTAL_") . "'"; ?>,
                "infoEmpty": <?php echo "'" . App\Classes\langClass::trans("Nulla tal??lat") . "'"; ?>,
                "infoFiltered": <?php echo "'" . App\Classes\langClass::trans("(_MAX_ ??sszes rekord k??z??l sz??rve)") . "'"; ?>,
                "infoThousands": " ",
                "lengthMenu": <?php echo "'" . App\Classes\langClass::trans("_MENU_ tal??lat oldalank??nt") . "'"; ?>,
                "loadingRecords": <?php echo "'" . App\Classes\langClass::trans("Bet??lt??s...") . "'"; ?>,
                "processing": <?php echo "'" . App\Classes\langClass::trans("Feldolgoz??s...") . "'"; ?>,
                "search": <?php echo "'" . App\Classes\langClass::trans("Keres??s:") . "'"; ?>,
                "zeroRecords": <?php echo "'" . App\Classes\langClass::trans("Nincs a keres??snek megfelel?? tal??lat") . "'"; ?>,
                "paginate": {
                    "first": <?php echo "'" . App\Classes\langClass::trans("Els??") . "'"; ?>,
                    "previous": <?php echo "'" . App\Classes\langClass::trans("El??z??") . "'"; ?>,
                    "next": <?php echo "'" . App\Classes\langClass::trans("K??vetkez??") . "'"; ?>,
                    "last": <?php echo "'" . App\Classes\langClass::trans("Utols??") . "'"; ?>
                },
                "aria": {
                    "sortAscending": <?php echo "'" . App\Classes\langClass::trans(": aktiv??lja a n??vekv?? rendez??shez"). "'"; ?>,
                    "sortDescending": <?php echo "'" . App\Classes\langClass::trans(": aktiv??lja a cs??kken?? rendez??shez") . "'"; ?>
                },
                "select": {
                    "rows": {
                        "_": <?php echo "'" . App\Classes\langClass::trans("%d sor kiv??lasztva") . "'"; ?>,
                        "1": <?php echo "'" . App\Classes\langClass::trans("1 sor kiv??lasztva") . "'"; ?>
                    },
                    "cells": {
                        "1": <?php echo "'" . App\Classes\langClass::trans("1 cella kiv??lasztva") . "'"; ?>,
                        "_": <?php echo "'" . App\Classes\langClass::trans("%d cella kiv??lasztva") . "'"; ?>
                    },
                    "columns": {
                        "1": <?php echo "'" . App\Classes\langClass::trans("1 oszlop kiv??lasztva") . "'"; ?>,
                        "_": <?php echo "'" . App\Classes\langClass::trans("%d oszlop kiv??lasztva") . "'"; ?>
                    }
                },
                "buttons": {
                    "colvis": <?php echo "'" . App\Classes\langClass::trans("Oszlopok") . "'"; ?>,
                    "copy": <?php echo "'" . App\Classes\langClass::trans("M??sol??s") . "'"; ?>,
                    "copyTitle": <?php echo "'" . App\Classes\langClass::trans("V??g??lapra m??sol??s") . "'"; ?>,
                    "copySuccess": {
                        "_": <?php echo "'" . App\Classes\langClass::trans("%d sor m??solva") . "'"; ?>,
                        "1": <?php echo "'" . App\Classes\langClass::trans("1 sor m??solva") . "'"; ?>
                    },
                    "collection": "Gy??jtem??ny",
                    "colvisRestore": <?php echo "'" . App\Classes\langClass::trans("Oszlopok vissza??ll??t??sa") . "'"; ?>,
                    "copyKeys": <?php echo "'" . App\Classes\langClass::trans("Nyomja meg a CTRL vagy u2318 + C gombokat a t??bl??zat adatainak a v??g??lapra m??sol??s??hoz.<br \/><br \/>A megszak??t??shoz kattintson az ??zenetre vagy nyomja meg az ESC billenty??t.") . "'"; ?>,
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": <?php echo "'" . App\Classes\langClass::trans("??sszes sor megjelen??t??se") . "'"; ?>,
                        "_": <?php echo "'" . App\Classes\langClass::trans("%d sor megjelen??t??se") . "'"; ?>
                    },
                    "pdf": "PDF",
                    "print": <?php echo "'" . App\Classes\langClass::trans("Nyomtat") . "'"; ?>
                },
                "autoFill": {
                    "cancel": <?php echo "'" . App\Classes\langClass::trans("Megszak??t??s") . "'"; ?>,
                    "fill": <?php echo "'" . App\Classes\langClass::trans("??sszes cella kit??lt??se a k??vetkez??vel: <i>%d<\/i>") . "'"; ?>,
                    "fillHorizontal": <?php echo "'" . App\Classes\langClass::trans("Cell??k v??zszintes kit??lt??se") . "'"; ?>,
                    "fillVertical": <?php echo "'" . App\Classes\langClass::trans("Cell??k f??gg??leges kit??lt??se") . "'"; ?>
                },
                "searchBuilder": {
                    "add": <?php echo "'" . App\Classes\langClass::trans("Felt??tel hozz??ad??sa") . "'"; ?>,
                    "button": {
                        "0": <?php echo "'" . App\Classes\langClass::trans("Keres??s konfigur??tor") . "'"; ?>,
                        "_": <?php echo "'" . App\Classes\langClass::trans("Keres??s konfigur??tor (%d)") . "'"; ?>
                    },
                    "clearAll": <?php echo "'" . App\Classes\langClass::trans("??sszes felt??tel t??rl??se") . "'"; ?>,
                    "condition": <?php echo "'" . App\Classes\langClass::trans("Felt??tel") . "'"; ?>,
                    "conditions": {
                        "date": {
                            "after": <?php echo "'" . App\Classes\langClass::trans("Ut??n") . "'"; ?>,
                            "before": <?php echo "'" . App\Classes\langClass::trans("El??tt") . "'"; ?>,
                            "between": <?php echo "'" . App\Classes\langClass::trans("K??z??tt") . "'"; ?>,
                            "empty": <?php echo "'" . App\Classes\langClass::trans("??res") . "'"; ?>,
                            "equals": <?php echo "'" . App\Classes\langClass::trans("Egyenl??") . "'"; ?>,
                            "not": <?php echo "'" . App\Classes\langClass::trans("Nem") . "'"; ?>,
                            "notBetween": <?php echo "'" . App\Classes\langClass::trans("K??v??l es??") . "'"; ?>,
                            "notEmpty": <?php echo "'" . App\Classes\langClass::trans("Nem ??res") . "'"; ?>
                        },
                        "number": {
                            "between": <?php echo "'" . App\Classes\langClass::trans("K??z??tt") . "'"; ?>,
                            "empty": <?php echo "'" . App\Classes\langClass::trans("??res") . "'"; ?>,
                            "equals": <?php echo "'" . App\Classes\langClass::trans("Egyenl??") . "'"; ?>,
                            "gt": <?php echo "'" . App\Classes\langClass::trans("Nagyobb mint") . "'"; ?>,
                            "gte": <?php echo "'" . App\Classes\langClass::trans("Nagyobb vagy egyenl?? mint") . "'"; ?>,
                            "lt": <?php echo "'" . App\Classes\langClass::trans("Kissebb mint") . "'"; ?>,
                            "lte": <?php echo "'" . App\Classes\langClass::trans("Kissebb vagy egyenl?? mint") . "'"; ?>,
                            "not": <?php echo "'" . App\Classes\langClass::trans("Nem") . "'"; ?>,
                            "notBetween": <?php echo "'" . App\Classes\langClass::trans("K??v??l es??") . "'"; ?>,
                            "notEmpty": <?php echo "'" . App\Classes\langClass::trans("Nem ??res") . "'"; ?>
                        },
                        "string": {
                            "contains": <?php echo "'" . App\Classes\langClass::trans("Tartalmazza") . "'"; ?>,
                            "empty": <?php echo "'" . App\Classes\langClass::trans("??res") . "'"; ?>,
                            "endsWith": <?php echo "'" . App\Classes\langClass::trans("V??gz??dik") . "'"; ?>,
                            "equals": <?php echo "'" . App\Classes\langClass::trans("Egyenl??") . "'"; ?>,
                            "not": <?php echo "'" . App\Classes\langClass::trans("Nem") . "'"; ?>,
                            "notEmpty": <?php echo "'" . App\Classes\langClass::trans("Nem ??res") . "'"; ?>,
                            "startsWith": <?php echo "'" . App\Classes\langClass::trans("Kezd??dik") . "'"; ?>
                        }
                    },
                    "data": <?php echo "'" . App\Classes\langClass::trans("Adat") . "'"; ?>,
                    "deleteTitle": <?php echo "'" . App\Classes\langClass::trans("Felt??tel t??rl??se") . "'"; ?>,
                    "logicAnd": <?php echo "'" . App\Classes\langClass::trans("??s") . "'"; ?>,
                    "logicOr": <?php echo "'" . App\Classes\langClass::trans("Vagy") . "'"; ?>,
                    "title": {
                        "0": <?php echo "'" . App\Classes\langClass::trans("Keres??s konfigur??tor") . "'"; ?>,
                        "_": <?php echo "'" . App\Classes\langClass::trans("Keres??s konfigur??tor (%d)") . "'"; ?>
                    },
                    "value": <?php echo "'" . App\Classes\langClass::trans("??rt??k") . "'"; ?>
                },
                "searchPanes": {
                    "clearMessage": <?php echo "'" . App\Classes\langClass::trans("Sz??r??k t??rl??se") . "'"; ?>,
                    "collapse": {
                        "0": <?php echo "'" . App\Classes\langClass::trans("Sz??r??panelek") . "'"; ?>,
                        "_": <?php echo "'" . App\Classes\langClass::trans("Sz??r??panelek (%d)") . "'"; ?>
                    },
                    "count": "{total}",
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": <?php echo "'" . App\Classes\langClass::trans("Nincsenek sz??r??panelek") . "'"; ?>,
                    "loadMessage": <?php echo "'" . App\Classes\langClass::trans("Sz??r??panelek bet??lt??se") . "'"; ?>,
                    "title": <?php echo "'" . App\Classes\langClass::trans("Akt??v sz??r??panelek: %d") . "'"; ?>
                },
                "datetime": {
                    "previous": <?php echo "'" . App\Classes\langClass::trans("El??z??") . "'"; ?>,
                    "next": <?php echo "'" . App\Classes\langClass::trans("K??vetkez??") . "'"; ?>,
                    "hours": <?php echo "'" . App\Classes\langClass::trans("??ra") . "'"; ?>,
                    "minutes": <?php echo "'" . App\Classes\langClass::trans("Perc") . "'"; ?>,
                    "seconds": <?php echo "'" . App\Classes\langClass::trans("M??sodperc") . "'"; ?>,
                    "amPm": [
                        <?php echo "'" . App\Classes\langClass::trans("de.") . "'"; ?>,
                        <?php echo "'" . App\Classes\langClass::trans("du.") . "'"; ?>
                    ]
                },
                "editor": {
                    "close": <?php echo "'" . App\Classes\langClass::trans("Bez??r??s") . "'"; ?>,
                    "create": {
                        "button": <?php echo "'" . App\Classes\langClass::trans("??j") . "'"; ?>,
                        "title": <?php echo "'" . App\Classes\langClass::trans("??j") . "'"; ?>,
                        "submit": <?php echo "'" . App\Classes\langClass::trans("L??trehoz??s") . "'"; ?>
                    },
                    "edit": {
                        "button": <?php echo "'" . App\Classes\langClass::trans("M??dos??t??s") . "'"; ?>,
                        "title": <?php echo "'" . App\Classes\langClass::trans("M??dos??t??s") . "'"; ?>,
                        "submit": <?php echo "'" . App\Classes\langClass::trans("M??dos??t??s") . "'"; ?>
                    },
                    "remove": {
                        "button": <?php echo "'" . App\Classes\langClass::trans("T??rl??s") . "'"; ?>,
                        "title": <?php echo "'" . App\Classes\langClass::trans("T??rl??s") . "'"; ?>,
                        "submit": <?php echo "'" . App\Classes\langClass::trans("T??rl??s") . "'"; ?>
                    }
                }
            },
            processing: true,
            pagingType: 'full_numbers',
            select: true,
            scrollY: 500,
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Mind"]],
            dom: 'B<"clear">lfrtip',
            buttons: [
                {
                    extend:    'copyHtml5',
                    text:      '<i class="far fa-copy"></i>',
                    titleAttr: 'M??sol??s',
                    exportOptions: {
                        columns: [ ':visible' ]
                    },
                },

                {
                    extend: 'csvHtml5',
                    text: '<i class="far fa-file-code"></i>',
                    titleAttr: 'CSV',
                    exportOptions: {
                        columns: [ ':visible' ]
                    },
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="far fa-file-excel"></i>',
                    titleAttr: 'Excel',
                    exportOptions: {
                        columns: [ ':visible' ]
                    },
                },
                {
                    extend: 'pdfHtml5',
                    text:      '<i class="far fa-file-pdf"></i>',
                    titleAttr: 'PDF',
                    exportOptions: {
                        columns: [ ':visible' ]
                    },
                }
            ],

        } );
    } );
</script>

