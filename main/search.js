function search(input,array){

    input = input.trim().toLowerCase().replace(/\s+/g, " ");

  for(a=0;a<array.length;a++){
    let object = array[a];
    object.point=0;
    let name = array[a].name;
      if( name == input){
        object.point+=5;
      }else{
          let input2 = input.split(" ");
          let name2 = name.split(" ");
          for(b=0;b<input2.length;b++){
            if(name.includes(input2[b])){
              object.point+=1;
            }
          }
      }
  }
  array.sort((a, b) => b.point - a.point);
  
  console.log(array)
  return array;
}