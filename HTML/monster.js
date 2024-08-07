fetch('http://127.0.0.1:8000/api/monsters')
.then(response => response.json())
.then(data => {
    // console.log(data);
    const wrapper = document.querySelector('#wrapper');

    data.forEach(el => {

        let div = document.createElement('div');
        div.classList.add('col-12', 'col-md-3', 'my-2', 'text-center');
        div.innerHTML = el.name
        wrapper.appendChild(div)
    }
    )
})
.catch(error => {
    console.error('Si è verificato un errore: ', error)
})