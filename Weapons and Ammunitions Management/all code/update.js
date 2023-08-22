let selector = document.querySelector('#img');
let image = document.querySelector('.img-container img');



selector.addEventListener('change',function()
{
    const file = this.files[0];

    if(file)
    {
        const reader=new FileReader();

        reader.addEventListener('load',function()
        {
            image.setAttribute('src',this.result);
        })
        reader.readAsDefault(file)
    }
}