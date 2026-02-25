document.addEventListener('copy',(event)=>{
    const pagelink='\n\nBelajar di mas_dedys';
    event.clipboardData.setData('text/plain', document.getSelection()+pagelink);
    event.preventDefault();
})