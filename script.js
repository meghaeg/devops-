let students = [];
let editIndex = null;

function addStudent() {
  const name = document.getElementById("name").value.trim();
  const grade = document.getElementById("grade").value.trim();

  if (name === "" || grade === "") {
    alert("Please enter both name and grade");
    return;
  }

  if (editIndex === null) {
    students.push({ name, grade });
  } else {
    students[editIndex] = { name, grade };
    editIndex = null;
  }

  document.getElementById("name").value = "";
  document.getElementById("grade").value = "";

  renderTable();
}

function renderTable() {
  const table = document.getElementById("studentTable");
  table.innerHTML = "";

  students.forEach((student, index) => {
    const row = `
      <tr>
        <td>${student.name}</td>
        <td>${student.grade}</td>
        <td>
          <button class="action-btn edit" onclick="editStudent(${index})">Edit</button>
          <button class="action-btn delete" onclick="deleteStudent(${index})">Delete</button>
        </td>
      </tr>
    `;
    table.innerHTML += row;
  });
}

function editStudent(index) {
  document.getElementById("name").value = students[index].name;
  document.getElementById("grade").value = students[index].grade;
  editIndex = index;
}

function deleteStudent(index) {
  if (confirm("Are you sure you want to delete this student?")) {
    students.splice(index, 1);
    renderTable();
  }
}
