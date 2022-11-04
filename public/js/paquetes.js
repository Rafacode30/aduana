window.addEventListener('load', (event) => {
    packages();
    call();
});

const call = () => {

    setInterval(packages, 8000);
}

const packages = () => {
    fetch(`${base_url+'/packages'}`, {           
        method: 'get'
    })
    .then(response => response.json())
    .then(async result => {

        const pr = document.querySelector('#wilkin').getElementsByTagName('tbody')[0];
        ck();
        result.forEach(record => {

            let row = pr.insertRow();
            let cell0 = row.insertCell(0);
            let cell1 = row.insertCell(1);
            let cell2 = row.insertCell(2);
            let cell3 = row.insertCell(3);
            let cell4 = row.insertCell(4);
            let cell5 = row.insertCell(5);
            let cell6 = row.insertCell(6);
            let cell7 = row.insertCell(7);

            cell0.innerHTML = record.id;
            cell1.innerHTML = record.tamaño;
            cell2.innerHTML = record.peso;
            cell4.innerHTML = record.destino;
            cell5.innerHTML = record.origen;
            cell3.innerHTML = 'Sensor ' + record.sensor;
            cell6.innerHTML = record.created_at;
            cell7.innerHTML = record.updated_at;
        });
        
    });
}

const ck = () => {

    const delete2 = document.getElementById('wilkin').getElementsByTagName('tbody')[0];
    delete2.innerHTML = '';
}