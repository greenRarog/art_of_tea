import React, {useState} from 'react';
export default function EasyInput({ name, title }){
    const defaultValue = '_______________'
    const [value, setValue] = useState(defaultValue);

    function blurFunc(event){
        if (event.target.value === '' ||
        event.target.value === ' ') {
            setValue(defaultValue);
        } else {
            setValue(event.target.value);
        }
    }

    return <>
        {title}: <input name={name} value={value} onChange={event => setValue(event.target.value)} onFocus={() => setValue('')} onBlur={event => blurFunc(event)}/><br/>
    </>;
}
