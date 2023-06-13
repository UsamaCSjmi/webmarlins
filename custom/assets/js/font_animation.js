animate_words_characters();

async function animate_words_characters(){
    const words=["Success","Services","Business"];
    var element = document.getElementById('banner-title-line');
    element.innerText="";
    const total_words = words.length;
    let word_index = 0;
    while(true){
        let char_index = 0;
        let word = words[word_index];
        let word_length = word.length;
        let text = "";
        while(char_index < word_length){
            text += word[char_index];
            element.innerText=text;
            await sleep(100);
            char_index++;
        }
        await sleep(500);
        char_index-=1;
        while(char_index >= 0){
            text = text.slice(0, char_index);            
            element.innerText=text;            
            await sleep(100);
            char_index--;
        }
        word_index=(word_index+1)%total_words;
    }
}