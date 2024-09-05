const matches = (obj,source)=>Object.keys(source).every(key => obj.hasOwnProperty(key) &&obj[key] ===source[key]);
console.log(matches({ age:20,hair: 'shot',beard:true},{hair: 'shot',beard:true}));//true
console.log(matches({ hair: 'shot',beard:true },{age:20,hair: 'shot',beard:true}));//false