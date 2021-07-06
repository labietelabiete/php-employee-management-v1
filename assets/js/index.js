function employeesManagementGrid() {
  //   $.ajax({
  //     type: "GET",
  //     url: "./library/employeeController.php",
  //   }).done(function (employees) {
  //     // debugger;

  // });
  $("#gridTable").jsGrid({
    width: "100%",
    height: "auto",

    filtering: true,
    inserting: true,
    editing: true,
    sortings: true,
    paging: true,
    autoload: true,
    pageSize: 10,
    pageButtonCount: 5,
    deleteConfirm: "Do you really want to delete this employee entry?",

    controller: {
      loadData: function (filter) {
        return $.ajax({
          type: "GET",
          url: "./library/employeeController.php",
          data: filter,
          success: function (data) {
            console.log("data --> ", data);
          },
        });
      },

      insertItem: function (item) {
        return $.ajax({
          type: "POST",
          url: "./library/employeeController.php",
          data: item,
        });
      },

      updateItem: function (item) {
        return $.ajax({
          type: "PUT",
          url: "./library/employeeController.php",
          data: item,
        });
      },

      deleteItem: function (item) {
        return $.ajax({
          type: "DELETE",
          url: "./library/employeeController.php",
          data: item,
        });
      },
    },

    //   data: response,

    fields: [
      { name: "id", type: "hidden", css: "hide" },
      { name: "name", type: "text", width: 30, validate: "required" },
      { name: "lastName", type: "hidden", css: "hide" },
      { name: "email", type: "text", width: 40, validate: "required" },
      { name: "gender", type: "hidden", css: "hide" },
      { name: "age", type: "number", width: 10, validate: "required" },
      {
        name: "streetAddress",
        type: "text",
        width: 25,
        validate: "required",
      },
      { name: "city", type: "text", width: 50, validate: "required" },
      { name: "state", type: "text", width: 10, validate: "required" },
      { name: "postalCode", type: "number", width: 30, validate: "required" },
      {
        name: "phoneNumber",
        type: "number",
        width: 30,
        validate: "required",
      },
      { name: "add", type: "control" },
    ],
  });
}
employeesManagementGrid();
