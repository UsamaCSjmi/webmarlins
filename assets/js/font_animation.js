const words=["Success","Services","Business"];

var element = document.getElementById('banner-title-line');
element.innerText="";

const arrayLenngth = words.length;
let word_index=0;


while (true)  
{   

    let word = words[index];
    const word_length = word.length; 

    let char_index = 0;
    while(char_index < word_length){


        char_index++;
    }
    while(char_index>=0){
        

        char_index--;
    }


    word_index = (word_index + 1) % arrayLenngth;
    
    

}

