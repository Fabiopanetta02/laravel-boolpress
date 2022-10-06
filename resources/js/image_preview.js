const placeholder = "https://www.runningin.info/wp-content/uploads/2018/07/no-image.jpg"
const preview = document.getElementById('preview');
const imageField = document.getElementById('image-field');

imageField.addEventListener('input', () =>{

    if(imageField.files && imageField.files[0]){
        let reader = new FileReader();

        reader.readAsDataURL(imageField.files[0]);
        reader.onload = event => {
            preview.src = event.target.result; 
        }
    } else preview.src = imageField.value ?? placeholder;
})