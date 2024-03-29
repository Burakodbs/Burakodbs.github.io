const apiKey = '75uiD2zxczzbV5Ah7llJaPUY5y5pozNkeTpE3JYl';
const url = 'https://api.nasa.gov/planetary/apod?';

let container = document.querySelector('.container');
let button = document.getElementById('fetch-image');


button.addEventListener('click', () => {
    let imageContainer = document.querySelector('.image-container');
    imageContainer.remove();
    let newImageContainer = document.createElement('div');
    newImageContainer.classList.add('image-container');
    container.append(newImageContainer);
    let dateInput = document.querySelector('.details-input input');
    let date = dateInput.value;
    var numerik = /[0-9]/;
    if(date==""){
        alert("Lütfen tarih alanını boş bırakmayınız. ");
        return false;
    }
    if(!numerik.test(date)){
        alert("Lütfen geçerli bir 'tarih' giriniz.");
        return false;
    }
    let request = new XMLHttpRequest();
    request.open('GET', url + "date=" + date + "&api_key=" + apiKey, true);
    request.send();
    request.onload = function () {
        if (request.status === 200) {
            let data = JSON.parse(request.responseText);
            let imageUrl = data.hdurl;
            let p= document.getElementById('aciklama');
            p.innerHTML=data.explanation;
            let image = document.createElement('img');
            image.src = imageUrl;
            newImageContainer.append(image);
        } else {
            window.alert('Lütfen yıl-ay-gün formatında giriniz.');
            
        }
    }
})