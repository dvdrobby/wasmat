/*
 * jsGrid v1.5.3 (http://js-grid.com)
 * (c) 2016 Artem Tabalin
 * Licensed under MIT (https://github.com/tabalinas/jsgrid/blob/master/LICENSE)
 */

$(document).ready(function() {
  alert("Button clicked! This is a JavaScript alert.");
$("#jsGrid1").jsGrid({
            height: "100%",
            width: "100%",

            sorting: true,
            paging: true,

            data: db.clients,

            fields: [{
                    name: "name",
                    title: "Nama Pelanggaran",
                    type: "text",
                    width: 150
                },
                {
                    name: "kota",
                    title: "Kota",
                    type: "text",
                    width: 100
                },
                {
                    name: "sp",
                    title: "SP",
                    type: "number",
                    width: 30
                },
                {
                    name: "ppns",
                    title: "PPNS",
                    type: "text",
                    width: 100
                },
                {
                    name: "action",
                    type: "checkbox",
                    title: "Action",
                    width: 50
                }
            ]
        });
});
