// const bg_div = document.querySelector('.bg_colors');
// const images_div = document.querySelector('.images');
// const modelNum = document.querySelector('.models-numbers').value;

// modelNum.addEventListener('change',function(){
//     let modelNum = document.querySelector('.models-numbers').value;
//     removeAllChildNodes(images_div);
//     for(let i=1; i<=modelNum;i++){
//         images_div.insertAdjacentHTML('beforeend',`
//         <label for="image"> Images
//             <input type="file" name="image`+i+`" required>
//         </label>`)
//     }   
// })


// modelNum.addEventListener('change', function(){
//     let modelNum = document.querySelector('.models-numbers').value;
//     removeAllChildNodes(bg_div);
//     for(let i=1; i<=modelNum;i++){
//         bg_div.insertAdjacentHTML('beforeend',`
//         <label for="gradient"> Background Color Gradient
//             <input class="input-text" type="text" name="gradient`+i+`" required>
//         </label>`)
//     }    
// })

// function removeAllChildNodes(parent) {
//     while (parent.firstChild) {
//         parent.removeChild(parent.firstChild);
//     }
// }
