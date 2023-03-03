import React, {useState} from 'react';

export default function RadioInput({ title, radio }){
    const [value, setValue] = useState(1);

    const result = radio.map((elem, index) => {
       return <>
           <input
               id={title}
               type='radio'
               value={elem}
               checked={value === elem ? true : false}
               onChange={event => setValue(event.target.value)}
           /> {elem}
           <br/>
       </>
    });
    return <>
        {title}: <br/>
        {result }
    </>;
}
