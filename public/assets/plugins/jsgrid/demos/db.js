(function() {

    var db = {

        loadData: function(filter) {
            return $.grep(this.clients, function(client) {
                return (!filter.name || client.name.indexOf(filter.name) > -1)
                    && (filter.kota === undefined || client.kota === filter.kota)
                    && (!filter.Address || client.Address.indexOf(filter.Address) > -1)
                    && (!filter.Country || client.Country === filter.Country)
                    && (filter.Married === undefined || client.Married === filter.Married);
            });
        },

        insertItem: function(insertingClient) {
            this.clients.push(insertingClient);
        },

        updateItem: function(updatingClient) { },

        deleteItem: function(deletingClient) {
            var clientIndex = $.inArray(deletingClient, this.clients);
            this.clients.splice(clientIndex, 1);
        }

    };

    window.db = db;


    // db.countries = [
    //     { Name: "", Id: 0 },
    //     { Name: "United States", Id: 1 },
    //     { Name: "Canada", Id: 2 },
    //     { Name: "United Kingdom", Id: 3 },
    //     { Name: "France", Id: 4 },
    //     { Name: "Brazil", Id: 5 },
    //     { Name: "China", Id: 6 },
    //     { name: "Russia", Id: 7 }
    // ];

    db.clients = [
        {
            "name": "Otto Clay",
            "Kota": 61,
            "Country": 6,
            "Address": "Ap #897-1459 Quam Avenue",
            "Married": false
        },
        {
            "name": "Connor Johnston",
            "Age": 73,
            "Country": 7,
            "Address": "Ap #370-4647 Dis Av.",
            "Married": false
        },
        {
            "name": "Lacey Hess",
            "Age": 29,
            "Country": 7,
            "Address": "Ap #365-8835 Integer St.",
            "Married": false
        },
        {
            "name": "Timothy Henson",
            "Age": 78,
            "Country": 1,
            "Address": "911-5143 Luctus Ave",
            "Married": false
        },
        {
            "name": "Ramona Benton",
            "Age": 43,
            "Country": 5,
            "Address": "Ap #614-689 Vehicula Street",
            "Married": true
        },
        {
            "name": "Ezra Tillman",
            "Age": 51,
            "Country": 1,
            "Address": "P.O. Box 738, 7583 Quisque St.",
            "Married": true
        },
        {
            "name": "Dante Carter",
            "Age": 59,
            "Country": 1,
            "Address": "P.O. Box 976, 6316 Lorem, St.",
            "Married": false
        },
        {
            "name": "Christopher Mcclure",
            "Age": 58,
            "Country": 1,
            "Address": "847-4303 Dictum Av.",
            "Married": true
        },
        {
            "name": "Ruby Rocha",
            "Age": 62,
            "Country": 2,
            "Address": "5212 Sagittis Ave",
            "Married": false
        },
        {
            "name": "Imelda Hardin",
            "Age": 39,
            "Country": 5,
            "Address": "719-7009 Auctor Av.",
            "Married": false
        },
        {
            "name": "Jonah Johns",
            "Age": 28,
            "Country": 5,
            "Address": "P.O. Box 939, 9310 A Ave",
            "Married": false
        },
        {
            "name": "Herman Rosa",
            "Age": 49,
            "Country": 7,
            "Address": "718-7162 Molestie Av.",
            "Married": true
        },
        {
            "name": "Arthur Gay",
            "Age": 20,
            "Country": 7,
            "Address": "5497 Neque Street",
            "Married": false
        },
        {
            "name": "Xena Wilkerson",
            "Age": 63,
            "Country": 1,
            "Address": "Ap #303-6974 Proin Street",
            "Married": true
        },
        {
            "name": "Lilah Atkins",
            "Age": 33,
            "Country": 5,
            "Address": "622-8602 Gravida Ave",
            "Married": true
        },
        {
            "name": "Malik Shepard",
            "Age": 59,
            "Country": 1,
            "Address": "967-5176 Tincidunt Av.",
            "Married": false
        },
        {
            "name": "Keely Silva",
            "Age": 24,
            "Country": 1,
            "Address": "P.O. Box 153, 8995 Praesent Ave",
            "Married": false
        },
        {
            "name": "Hunter Pate",
            "Age": 73,
            "Country": 7,
            "Address": "P.O. Box 771, 7599 Ante, Road",
            "Married": false
        },
        {
            "name": "Mikayla Roach",
            "Age": 55,
            "Country": 5,
            "Address": "Ap #438-9886 Donec Rd.",
            "Married": true
        },
        {
            "name": "Upton Joseph",
            "Age": 48,
            "Country": 4,
            "Address": "Ap #896-7592 Habitant St.",
            "Married": true
        },
        {
            "name": "Jeanette Pate",
            "Age": 59,
            "Country": 2,
            "Address": "P.O. Box 177, 7584 Amet, St.",
            "Married": false
        },
        {
            "name": "Kaden Hernandez",
            "Age": 79,
            "Country": 3,
            "Address": "366 Ut St.",
            "Married": true
        },
        {
            "name": "Kenyon Stevens",
            "Age": 20,
            "Country": 3,
            "Address": "P.O. Box 704, 4580 Gravida Rd.",
            "Married": false
        },
        {
            "name": "Jerome Harper",
            "Age": 31,
            "Country": 5,
            "Address": "2464 Porttitor Road",
            "Married": false
        },
        {
            "name": "Jelani Patel",
            "Age": 36,
            "Country": 2,
            "Address": "P.O. Box 541, 5805 Nec Av.",
            "Married": true
        },
        {
            "name": "Keaton Oconnor",
            "Age": 21,
            "Country": 1,
            "Address": "Ap #657-1093 Nec, Street",
            "Married": false
        },
        {
            "name": "Bree Johnston",
            "Age": 31,
            "Country": 2,
            "Address": "372-5942 Vulputate Avenue",
            "Married": false
        },
        {
            "name": "Maisie Hodges",
            "Age": 70,
            "Country": 7,
            "Address": "P.O. Box 445, 3880 Odio, Rd.",
            "Married": false
        },
        {
            "name": "Kuame Calhoun",
            "Age": 39,
            "Country": 2,
            "Address": "P.O. Box 609, 4105 Rutrum St.",
            "Married": true
        },
        {
            "name": "Carlos Cameron",
            "Age": 38,
            "Country": 5,
            "Address": "Ap #215-5386 A, Avenue",
            "Married": false
        },
        {
            "name": "Fulton Parsons",
            "Age": 25,
            "Country": 7,
            "Address": "P.O. Box 523, 3705 Sed Rd.",
            "Married": false
        },
        {
            "name": "Wallace Christian",
            "Age": 43,
            "Country": 3,
            "Address": "416-8816 Mauris Avenue",
            "Married": true
        },
        {
            "name": "Caryn Maldonado",
            "Age": 40,
            "Country": 1,
            "Address": "108-282 Nonummy Ave",
            "Married": false
        },
        {
            "name": "Whilemina Frank",
            "Age": 20,
            "Country": 7,
            "Address": "P.O. Box 681, 3938 Egestas. Av.",
            "Married": true
        },
        {
            "name": "Emery Moon",
            "Age": 41,
            "Country": 4,
            "Address": "Ap #717-8556 Non Road",
            "Married": true
        },
        {
            "name": "Price Watkins",
            "Age": 35,
            "Country": 4,
            "Address": "832-7810 Nunc Rd.",
            "Married": false
        },
        {
            "name": "Lydia Castillo",
            "Age": 59,
            "Country": 7,
            "Address": "5280 Placerat, Ave",
            "Married": true
        },
        {
            "name": "Lawrence Conway",
            "Age": 53,
            "Country": 1,
            "Address": "Ap #452-2808 Imperdiet St.",
            "Married": false
        },
        {
            "name": "Kalia Nicholson",
            "Age": 67,
            "Country": 5,
            "Address": "P.O. Box 871, 3023 Tellus Road",
            "Married": true
        },
        {
            "name": "Brielle Baxter",
            "Age": 45,
            "Country": 3,
            "Address": "Ap #822-9526 Ut, Road",
            "Married": true
        },
        {
            "name": "Valentine Brady",
            "Age": 72,
            "Country": 7,
            "Address": "8014 Enim. Road",
            "Married": true
        },
        {
            "name": "Rebecca Gardner",
            "Age": 57,
            "Country": 4,
            "Address": "8655 Arcu. Road",
            "Married": true
        },
        {
            "name": "Vladimir Tate",
            "Age": 26,
            "Country": 1,
            "Address": "130-1291 Non, Rd.",
            "Married": true
        },
        {
            "name": "Vernon Hays",
            "Age": 56,
            "Country": 4,
            "Address": "964-5552 In Rd.",
            "Married": true
        },
        {
            "name": "Allegra Hull",
            "Age": 22,
            "Country": 4,
            "Address": "245-8891 Donec St.",
            "Married": true
        },
        {
            "name": "Hu Hendrix",
            "Age": 65,
            "Country": 7,
            "Address": "428-5404 Tempus Ave",
            "Married": true
        },
        {
            "name": "Kenyon Battle",
            "Age": 32,
            "Country": 2,
            "Address": "921-6804 Lectus St.",
            "Married": false
        },
        {
            "name": "Gloria Nielsen",
            "Age": 24,
            "Country": 4,
            "Address": "Ap #275-4345 Lorem, Street",
            "Married": true
        },
        {
            "name": "Illiana Kidd",
            "Age": 59,
            "Country": 2,
            "Address": "7618 Lacus. Av.",
            "Married": false
        },
        {
            "name": "Adria Todd",
            "Age": 68,
            "Country": 6,
            "Address": "1889 Tincidunt Road",
            "Married": false
        },
        {
            "name": "Kirsten Mayo",
            "Age": 71,
            "Country": 1,
            "Address": "100-8640 Orci, Avenue",
            "Married": false
        },
        {
            "name": "Willa Hobbs",
            "Age": 60,
            "Country": 6,
            "Address": "P.O. Box 323, 158 Tristique St.",
            "Married": false
        },
        {
            "name": "Alexis Clements",
            "Age": 69,
            "Country": 5,
            "Address": "P.O. Box 176, 5107 Proin Rd.",
            "Married": false
        },
        {
            "name": "Akeem Conrad",
            "Age": 60,
            "Country": 2,
            "Address": "282-495 Sed Ave",
            "Married": true
        },
        {
            "name": "Montana Silva",
            "Age": 79,
            "Country": 6,
            "Address": "P.O. Box 120, 9766 Consectetuer St.",
            "Married": false
        },
        {
            "name": "Kaseem Hensley",
            "Age": 77,
            "Country": 6,
            "Address": "Ap #510-8903 Mauris. Av.",
            "Married": true
        },
        {
            "name": "Christopher Morton",
            "Age": 35,
            "Country": 5,
            "Address": "P.O. Box 234, 3651 Sodales Avenue",
            "Married": false
        },
        {
            "name": "Wade Fernandez",
            "Age": 49,
            "Country": 6,
            "Address": "740-5059 Dolor. Road",
            "Married": true
        },
        {
            "name": "Illiana Kirby",
            "Age": 31,
            "Country": 2,
            "Address": "527-3553 Mi Ave",
            "Married": false
        },
        {
            "name": "Kimberley Hurley",
            "Age": 65,
            "Country": 5,
            "Address": "P.O. Box 637, 9915 Dictum St.",
            "Married": false
        },
        {
            "name": "Arthur Olsen",
            "Age": 74,
            "Country": 5,
            "Address": "887-5080 Eget St.",
            "Married": false
        },
        {
            "name": "Brody Potts",
            "Age": 59,
            "Country": 2,
            "Address": "Ap #577-7690 Sem Road",
            "Married": false
        },
        {
            "name": "Dillon Ford",
            "Age": 60,
            "Country": 1,
            "Address": "Ap #885-9289 A, Av.",
            "Married": true
        },
        {
            "name": "Hannah Juarez",
            "Age": 61,
            "Country": 2,
            "Address": "4744 Sapien, Rd.",
            "Married": true
        },
        {
            "name": "Vincent Shaffer",
            "Age": 25,
            "Country": 2,
            "Address": "9203 Nunc St.",
            "Married": true
        },
        {
            "name": "George Holt",
            "Age": 27,
            "Country": 6,
            "Address": "4162 Cras Rd.",
            "Married": false
        },
        {
            "name": "Tobias Bartlett",
            "Age": 74,
            "Country": 4,
            "Address": "792-6145 Mauris St.",
            "Married": true
        },
        {
            "name": "Xavier Hooper",
            "Age": 35,
            "Country": 1,
            "Address": "879-5026 Interdum. Rd.",
            "Married": false
        },
        {
            "name": "Declan Dorsey",
            "Age": 31,
            "Country": 2,
            "Address": "Ap #926-4171 Aenean Road",
            "Married": true
        },
        {
            "name": "Clementine Tran",
            "Age": 43,
            "Country": 4,
            "Address": "P.O. Box 176, 9865 Eu Rd.",
            "Married": true
        },
        {
            "name": "Pamela Moody",
            "Age": 55,
            "Country": 6,
            "Address": "622-6233 Luctus Rd.",
            "Married": true
        },
        {
            "name": "Julie Leon",
            "Age": 43,
            "Country": 6,
            "Address": "Ap #915-6782 Sem Av.",
            "Married": true
        },
        {
            "name": "Shana Nolan",
            "Age": 79,
            "Country": 5,
            "Address": "P.O. Box 603, 899 Eu St.",
            "Married": false
        },
        {
            "name": "Vaughan Moody",
            "Age": 37,
            "Country": 5,
            "Address": "880 Erat Rd.",
            "Married": false
        },
        {
            "name": "Randall Reeves",
            "Age": 44,
            "Country": 3,
            "Address": "1819 Non Street",
            "Married": false
        },
        {
            "name": "Dominic Raymond",
            "Age": 68,
            "Country": 1,
            "Address": "Ap #689-4874 Nisi Rd.",
            "Married": true
        },
        {
            "name": "Lev Pugh",
            "Age": 69,
            "Country": 5,
            "Address": "Ap #433-6844 Auctor Avenue",
            "Married": true
        },
        {
            "name": "Desiree Hughes",
            "Age": 80,
            "Country": 4,
            "Address": "605-6645 Fermentum Avenue",
            "Married": true
        },
        {
            "name": "Idona Oneill",
            "Age": 23,
            "Country": 7,
            "Address": "751-8148 Aliquam Avenue",
            "Married": true
        },
        {
            "name": "Lani Mayo",
            "Age": 76,
            "Country": 1,
            "Address": "635-2704 Tristique St.",
            "Married": true
        },
        {
            "name": "Cathleen Bonner",
            "Age": 40,
            "Country": 1,
            "Address": "916-2910 Dolor Av.",
            "Married": false
        },
        {
            "name": "Sydney Murray",
            "Age": 44,
            "Country": 5,
            "Address": "835-2330 Fringilla St.",
            "Married": false
        },
        {
            "name": "Brenna Rodriguez",
            "Age": 77,
            "Country": 6,
            "Address": "3687 Imperdiet Av.",
            "Married": true
        },
        {
            "name": "Alfreda Mcdaniel",
            "Age": 38,
            "Country": 7,
            "Address": "745-8221 Aliquet Rd.",
            "Married": true
        },
        {
            "name": "Zachery Atkins",
            "Age": 30,
            "Country": 1,
            "Address": "549-2208 Auctor. Road",
            "Married": true
        },
        {
            "name": "Amelia Rich",
            "Age": 56,
            "Country": 4,
            "Address": "P.O. Box 734, 4717 Nunc Rd.",
            "Married": false
        },
        {
            "name": "Kiayada Witt",
            "Age": 62,
            "Country": 3,
            "Address": "Ap #735-3421 Malesuada Avenue",
            "Married": false
        },
        {
            "name": "Lysandra Pierce",
            "Age": 36,
            "Country": 1,
            "Address": "Ap #146-2835 Curabitur St.",
            "Married": true
        },
        {
            "name": "Cara Rios",
            "Age": 58,
            "Country": 4,
            "Address": "Ap #562-7811 Quam. Ave",
            "Married": true
        },
        {
            "name": "Austin Andrews",
            "Age": 55,
            "Country": 7,
            "Address": "P.O. Box 274, 5505 Sociis Rd.",
            "Married": false
        },
        {
            "name": "Lillian Peterson",
            "Age": 39,
            "Country": 2,
            "Address": "6212 A Avenue",
            "Married": false
        },
        {
            "name": "Adria Beach",
            "Age": 29,
            "Country": 2,
            "Address": "P.O. Box 183, 2717 Nunc Avenue",
            "Married": true
        },
        {
            "name": "Oleg Durham",
            "Age": 80,
            "Country": 4,
            "Address": "931-3208 Nunc Rd.",
            "Married": false
        },
        {
            "name": "Casey Reese",
            "Age": 60,
            "Country": 4,
            "Address": "383-3675 Ultrices, St.",
            "Married": false
        },
        {
            "name": "Kane Burnett",
            "Age": 80,
            "Country": 1,
            "Address": "759-8212 Dolor. Ave",
            "Married": false
        },
        {
            "name": "Stewart Wilson",
            "Age": 46,
            "Country": 7,
            "Address": "718-7845 Sagittis. Av.",
            "Married": false
        },
        {
            "name": "Charity Holcomb",
            "Age": 31,
            "Country": 6,
            "Address": "641-7892 Enim. Ave",
            "Married": false
        },
        {
            "name": "Kyra Cummings",
            "Age": 43,
            "Country": 4,
            "Address": "P.O. Box 702, 6621 Mus. Av.",
            "Married": false
        },
        {
            "name": "Stuart Wallace",
            "Age": 25,
            "Country": 7,
            "Address": "648-4990 Sed Rd.",
            "Married": true
        },
        {
            "name": "Carter Clarke",
            "Age": 59,
            "Country": 6,
            "Address": "Ap #547-2921 A Street",
            "Married": false
        }
    ];

    db.users = [
        {
            "ID": "x",
            "Account": "A758A693-0302-03D1-AE53-EEFE22855556",
            "Name": "Carson Kelley",
            "RegisterDate": "2002-04-20T22:55:52-07:00"
        },
        {
            "Account": "D89FF524-1233-0CE7-C9E1-56EFF017A321",
            "Name": "Prescott Griffin",
            "RegisterDate": "2011-02-22T05:59:55-08:00"
        },
        {
            "Account": "06FAAD9A-5114-08F6-D60C-961B2528B4F0",
            "Name": "Amir Saunders",
            "RegisterDate": "2014-08-13T09:17:49-07:00"
        },
        {
            "Account": "EED7653D-7DD9-A722-64A8-36A55ECDBE77",
            "Name": "Derek Thornton",
            "RegisterDate": "2012-02-27T01:31:07-08:00"
        },
        {
            "Account": "2A2E6D40-FEBD-C643-A751-9AB4CAF1E2F6",
            "Name": "Fletcher Romero",
            "RegisterDate": "2010-06-25T15:49:54-07:00"
        },
        {
            "Account": "3978F8FA-DFF0-DA0E-0A5D-EB9D281A3286",
            "Name": "Thaddeus Stein",
            "RegisterDate": "2013-11-10T07:29:41-08:00"
        },
        {
            "Account": "658DBF5A-176E-569A-9273-74FB5F69FA42",
            "Name": "Nash Knapp",
            "RegisterDate": "2005-06-24T09:11:19-07:00"
        },
        {
            "Account": "76D2EE4B-7A73-1212-F6F2-957EF8C1F907",
            "Name": "Quamar Vega",
            "RegisterDate": "2011-04-13T20:06:29-07:00"
        },
        {
            "Account": "00E46809-A595-CE82-C5B4-D1CAEB7E3E58",
            "Name": "Philip Galloway",
            "RegisterDate": "2008-08-21T18:59:38-07:00"
        },
        {
            "Account": "C196781C-DDCC-AF83-DDC2-CA3E851A47A0",
            "Name": "Mason French",
            "RegisterDate": "2000-11-15T00:38:37-08:00"
        },
        {
            "Account": "5911F201-818A-B393-5888-13157CE0D63F",
            "Name": "Ross Cortez",
            "RegisterDate": "2010-05-27T17:35:32-07:00"
        },
        {
            "Account": "B8BB78F9-E1A1-A956-086F-E12B6FE168B6",
            "Name": "Logan King",
            "RegisterDate": "2003-07-08T16:58:06-07:00"
        },
        {
            "Account": "06F636C3-9599-1A2D-5FD5-86B24ADDE626",
            "Name": "Cedric Leblanc",
            "RegisterDate": "2011-06-30T14:30:10-07:00"
        },
        {
            "Account": "FE880CDD-F6E7-75CB-743C-64C6DE192412",
            "Name": "Simon Sullivan",
            "RegisterDate": "2013-06-11T16:35:07-07:00"
        },
        {
            "Account": "BBEDD673-E2C1-4872-A5D3-C4EBD4BE0A12",
            "Name": "Jamal West",
            "RegisterDate": "2001-03-16T20:18:29-08:00"
        },
        {
            "Account": "19BC22FA-C52E-0CC6-9552-10365C755FAC",
            "Name": "Hector Morales",
            "RegisterDate": "2012-11-01T01:56:34-07:00"
        },
        {
            "Account": "A8292214-2C13-5989-3419-6B83DD637D6C",
            "Name": "Herrod Hart",
            "RegisterDate": "2008-03-13T19:21:04-07:00"
        },
        {
            "Account": "0285564B-F447-0E7F-EAA1-7FB8F9C453C8",
            "Name": "Clark Maxwell",
            "RegisterDate": "2004-08-05T08:22:24-07:00"
        },
        {
            "Account": "EA78F076-4F6E-4228-268C-1F51272498AE",
            "Name": "Reuben Walter",
            "RegisterDate": "2011-01-23T01:55:59-08:00"
        },
        {
            "Account": "6A88C194-EA21-426F-4FE2-F2AE33F51793",
            "Name": "Ira Ingram",
            "RegisterDate": "2008-08-15T05:57:46-07:00"
        },
        {
            "Account": "4275E873-439C-AD26-56B3-8715E336508E",
            "Name": "Damian Morrow",
            "RegisterDate": "2015-09-13T01:50:55-07:00"
        },
        {
            "Account": "A0D733C4-9070-B8D6-4387-D44F0BA515BE",
            "Name": "Macon Farrell",
            "RegisterDate": "2011-03-14T05:41:40-07:00"
        },
        {
            "Account": "B3683DE8-C2FA-7CA0-A8A6-8FA7E954F90A",
            "Name": "Joel Galloway",
            "RegisterDate": "2003-02-03T04:19:01-08:00"
        },
        {
            "Account": "01D95A8E-91BC-2050-F5D0-4437AAFFD11F",
            "Name": "Rigel Horton",
            "RegisterDate": "2015-06-20T11:53:11-07:00"
        },
        {
            "Account": "F0D12CC0-31AC-A82E-FD73-EEEFDBD21A36",
            "Name": "Sylvester Gaines",
            "RegisterDate": "2004-03-12T09:57:13-08:00"
        },
        {
            "Account": "874FCC49-9A61-71BC-2F4E-2CE88348AD7B",
            "Name": "Abbot Mckay",
            "RegisterDate": "2008-12-26T20:42:57-08:00"
        },
        {
            "Account": "B8DA1912-20A0-FB6E-0031-5F88FD63EF90",
            "Name": "Solomon Green",
            "RegisterDate": "2013-09-04T01:44:47-07:00"
        }
     ];

}());