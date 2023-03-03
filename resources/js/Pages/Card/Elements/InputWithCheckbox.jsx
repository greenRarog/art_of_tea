import React, {useState} from 'react';
import EasyInput from './EasyInput.jsx';

export default function InputWithCheckbox({ name, checkBox, title }){

   let checks = checkBox.map((value, index) => {
       return <><input name={name + '_' + index} value={value} type='checkbox'/> {value}</>
   })

    return <>
        {title} <br/>
        {checks}<br/>
        Уточнить/дополнить: <EasyInput name={name}/>
    </>;
}
