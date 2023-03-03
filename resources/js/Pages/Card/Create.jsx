import { Head } from '@inertiajs/react';
import EasyInput from './Elements/EasyInput';
import InputWithCheckbox from './Elements/InputWithCheckbox';
import RadioInput from './Elements/RadioInput.jsx';

export default function Create() {
    return (
        <>
            <Head title="Create new card" />

                <EasyInput
                    name='name'
                    title='Name'
                />

                <EasyInput
                    name='group'
                    title='Group'
                />

                <EasyInput
                    name='cost'
                    title='Cost'
                />

                <InputWithCheckbox
                    title='Aroma dry tea'
                    name='aroma_dry_tea'
                    checkBox={propertyAromaDryTea}
                />

                <RadioInput
                    title='Настой'
                    radio={propertyInfusion}
                />

                <EasyInput
                    name='color'
                    title='Color'
                />

                <InputWithCheckbox
                    title='Aroma infusion'
                    name='aroma_infusion'
                    checkBox={propertyAromaInfusion}
                />

                <InputWithCheckbox
                    title='Taste infusion'
                    name='taste_infusion'
                    checkBox={propertyTasteInfusion}
                />

                <InputWithCheckbox
                    title='Aftertaste'
                    name='aftertaste'
                    checkBox={propertyAftertaste}
                />

                <InputWithCheckbox
                    title='Impression'
                    name='impression'
                    checkBox={propertyImpression}
                />

                <input type='submit'/>
        </>
    );
}
