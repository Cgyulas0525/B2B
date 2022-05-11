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
                "emptyTable": "Nincs rendelkezésre álló adat",
                "info": "Találatok: _START_ - _END_ Összesen: _TOTAL_",
                "infoEmpty": "Nulla találat",
                "infoFiltered": "(_MAX_ összes rekord közül szűrve)",
                "infoThousands": " ",
                "lengthMenu": "_MENU_ találat oldalanként",
                "loadingRecords": "Betöltés...",
                "processing": "Feldolgozás...",
                "search": "Keresés:",
                "zeroRecords": "Nincs a keresésnek megfelelő találat",
                "paginate": {
                    "first": "Első",
                    "previous": "Előző",
                    "next": "Következő",
                    "last": "Utolsó"
                },
                "aria": {
                    "sortAscending": ": aktiválja a növekvő rendezéshez",
                    "sortDescending": ": aktiválja a csökkenő rendezéshez"
                },
                "select": {
                    "rows": {
                        "_": "%d sor kiválasztva",
                        "1": "1 sor kiválasztva"
                    },
                    "cells": {
                        "1": "1 cella kiválasztva",
                        "_": "%d cella kiválasztva"
                    },
                    "columns": {
                        "1": "1 oszlop kiválasztva",
                        "_": "%d oszlop kiválasztva"
                    }
                },
                "buttons": {
                    "colvis": "Oszlopok",
                    "copy": "Másolás",
                    "copyTitle": "Vágólapra másolás",
                    "copySuccess": {
                        "_": "%d sor másolva",
                        "1": "1 sor másolva"
                    },
                    "collection": "Gyűjtemény",
                    "colvisRestore": "Oszlopok visszaállítása",
                    "copyKeys": "Nyomja meg a CTRL vagy u2318 + C gombokat a táblázat adatainak a vágólapra másolásához.<br \/><br \/>A megszakításhoz kattintson az üzenetre vagy nyomja meg az ESC billentyűt.",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": "Összes sor megjelenítése",
                        "_": "%d sor megjelenítése"
                    },
                    "pdf": "PDF",
                    "print": "Nyomtat"
                },
                "autoFill": {
                    "cancel": "Megszakítás",
                    "fill": "Összes cella kitöltése a következővel: <i>%d<\/i>",
                    "fillHorizontal": "Cellák vízszintes kitöltése",
                    "fillVertical": "Cellák függőleges kitöltése"
                },
                "searchBuilder": {
                    "add": "Feltétel hozzáadása",
                    "button": {
                        "0": "Keresés konfigurátor",
                        "_": "Keresés konfigurátor (%d)"
                    },
                    "clearAll": "Összes feltétel törlése",
                    "condition": "Feltétel",
                    "conditions": {
                        "date": {
                            "after": "Után",
                            "before": "Előtt",
                            "between": "Között",
                            "empty": "Üres",
                            "equals": "Egyenlő",
                            "not": "Nem",
                            "notBetween": "Kívül eső",
                            "notEmpty": "Nem üres"
                        },
                        "number": {
                            "between": "Között",
                            "empty": "Üres",
                            "equals": "Egyenlő",
                            "gt": "Nagyobb mint",
                            "gte": "Nagyobb vagy egyenlő mint",
                            "lt": "Kissebb mint",
                            "lte": "Kissebb vagy egyenlő mint",
                            "not": "Nem",
                            "notBetween": "Kívül eső",
                            "notEmpty": "Nem üres"
                        },
                        "string": {
                            "contains": "Tartalmazza",
                            "empty": "Üres",
                            "endsWith": "Végződik",
                            "equals": "Egyenlő",
                            "not": "Nem",
                            "notEmpty": "Nem üres",
                            "startsWith": "Kezdődik"
                        }
                    },
                    "data": "Adat",
                    "deleteTitle": "Feltétel törlése",
                    "logicAnd": "És",
                    "logicOr": "Vagy",
                    "title": {
                        "0": "Keresés konfigurátor",
                        "_": "Keresés konfigurátor (%d)"
                    },
                    "value": "Érték"
                },
                "searchPanes": {
                    "clearMessage": "Szűrők törlése",
                    "collapse": {
                        "0": "Szűrőpanelek",
                        "_": "Szűrőpanelek (%d)"
                    },
                    "count": "{total}",
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": "Nincsenek szűrőpanelek",
                    "loadMessage": "Szűrőpanelek betöltése",
                    "title": "Aktív szűrőpanelek: %d"
                },
                "datetime": {
                    "previous": "Előző",
                    "next": "Következő",
                    "hours": "Óra",
                    "minutes": "Perc",
                    "seconds": "Másodperc",
                    "amPm": [
                        "de.",
                        "du."
                    ]
                },
                "editor": {
                    "close": "Bezárás",
                    "create": {
                        "button": "Új",
                        "title": "Új",
                        "submit": "Létrehozás"
                    },
                    "edit": {
                        "button": "Módosítás",
                        "title": "Módosítás",
                        "submit": "Módosítás"
                    },
                    "remove": {
                        "button": "Törlés",
                        "title": "Törlés",
                        "submit": "Törlés"
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
                    titleAttr: 'Másolás',
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

