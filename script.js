document.getElementById('client-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const clientName = document.getElementById('client-name').value;
    const clientService = document.getElementById('client-service').value;

    const table = document.querySelector('table tbody');
    const newRow = document.createElement('tr');

    const nameCell = document.createElement('td');
    nameCell.textContent = clientName;

    const serviceCell = document.createElement('td');
    serviceCell.textContent = clientService;

    newRow.appendChild(nameCell);
    newRow.appendChild(serviceCell);
    table.appendChild(newRow);

    // Clear form fields after submission
    document.getElementById('client-name').value = '';
    document.getElementById('client-service').value = '';
});
