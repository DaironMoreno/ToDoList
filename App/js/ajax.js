const SaveData = function () {
  const formulario = document.getElementById("formulario");
  const nombre = document.getElementById("nom").value;
  const apellido = document.getElementById("ape").value;
  const documento = document.getElementById("doc").value;

  const datos =
    "nombre=" + nombre + "&apellido=" + apellido + "&documento=" + documento;

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "./App/controller/estudiantesController.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        formulario.reset();
        getData();
      } else {
        alert("Error Code: " + xhr.status);
        alert("Error Message: " + xhr.statusText);
      }
    }
  };
  console.log(datos);
  xhr.send(datos);
};

//document.getElementById("enviarData").addEventListener("click", SaveData());

const getData = function () {
  const xhr = new XMLHttpRequest();
  const tbody = document.getElementById("tbody");
  let tr = "";
  xhr.open("GET", "./App/controller/showDataestudiantesController.php", true);
  xhr.responseType = "json";
  //xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onload = () => {
    let status = xhr.status;

    if (status === 200) {
      let respuesta = xhr.response;
      if (respuesta.length === 0) {
        console.log("no existen registros");
      } else {
        respuesta.forEach((element) => {
          tr += `
            <tr>
              <td>${element.id}</td>
              <td>${element.nombre}</td>
              <td>${element.apellido}</td>
              <td>${element.documento}</td>
              <td><button type="button" onclick='editarData(${element.id})' class="btn btn-primary">Edit</button></td>
              <td><button type="button" onclick='eliminarData(${element.id})' "class="btn btn-danger">Delete</button></td>
            </tr>
          `;
        });
      }
      tbody.innerHTML = tr;
    }
  };
  /* xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        formulario.reset();
      } else {
        alert("Error Code: " + xhr.status);
        alert("Error Message: " + xhr.statusText);
      }
    }
  }; */

  xhr.send();
};

getData();

const eliminarData = function (id) {
  alert(id);
};
