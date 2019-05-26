<template>
    <div class="flex flex-wrap -mx-3 mb-6 border rounded">
        <div class="section-head">
            Educational History
        </div>
        
        <div class="w-full" v-for="(education, index) in educations" v-bind:key="index">
            <div class="flex flex-wrap border rounded shadow m-3 pt-2">
                <!-- Institution -->
                <div class="w-full px-3 mb-4 md:mb-0">
                    <label :for="`education[${index}][institution]`" class="labels">
                        Institution and Location <span class="text-red">*</span>
                    </label>
                    <input v-model="education.institution" type="text" :name="`education[${index}][institution]`" required class="inputs" placeholder="African University of Science and Technology, Abuja">
                </div>
                
                <!-- Degree -->
                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label :for="`education[${index}][degree]`" class="labels">
                        Degree <span class="text-red">*</span>
                    </label>
            
                    <div class="relative">
                        <select v-model="education.degree" :name="`education[${index}][degree]`" class="selects">
                            <option value="null">Select Degree</option>
                            <option v-for="degree in degrees" :value="degree.id">{{ degree.degree}} </option>
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>
                </div>
        
                <!-- Course of Study -->
                <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                    <label :for="`education[${index}][course_of_study]`" class="labels">
                        Course of Study <span class="text-red">*</span>
                    </label>
            
                    <input v-model="education.course_of_study" type="text" :name="`education[${index}][course_of_study]`" required class="inputs" placeholder="Computer Science">
                </div>
        
                <!-- From -->
                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                    <label :for="`education[${index}][from_month]`" class="labels">
                        Start Date <span class="text-red">*</span>
                    </label>
            
                    <div class="flex">
                        <div class="relative">
                            <select v-model="education.from_month" :name="`education[${index}][from_month]`" class="selects">
                                <option value="null">Select Month</option>
                                <option v-for="(month, index) in months" :value="index + 1">{{ month }}</option>
                            </select>
                            <drop-down-svg></drop-down-svg>
                        </div>
                
                        <div class="relative ml-3">
                            <select v-model="education.from_year" :name="`education[${index}][from_year]`" class="selects">
                                <option value="null">Select Year</option>
                                <option v-for="year in years" :value="year"> {{ year }} </option>
                            </select>
                            <drop-down-svg></drop-down-svg>
                        </div>
                    </div>
                </div>
        
                <!-- To -->
                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label :for="`education[${index}][to_month]`" class="labels">
                    Graduation Date <span class="text-red">*</span>
                </label>
        
                <div class="flex">
                    <div class="relative">
                        <select v-model="education.to_month" :name="`education[${index}][to_month]`" class="selects">
                            <option value="null">Select Month</option>
                            <option v-for="(month, index) in months" :value="index + 1">{{ month }}</option>
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>
            
                    <div class="relative ml-3">
                        <select v-model="education.to_year" :name="`education[${index}][to_year]`" class="selects">
                            <option value="null">Select Year</option>
                            <option v-for="year in years" :value="year"> {{ year }} </option>
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>
                </div>
            </div>
            </div>
            
            <hr class="w-full border">
        </div>
        
        
        <div class="flex ml-auto mr-3 mb-3">
            <input class="block px-3 py-2 block border bg-grey-lighter rounded text-grey-dark font-bold hover:bg-red-lighter" type="button" value=" - Remove " @click="remove">
            <input class="block px-3 py-2 block border bg-grey-lighter rounded text-blue font-bold hover:bg-blue-lighter ml-3" type="button" value=" + Add " @click="add">
        </div>
    </div>
</template>

<script>
    import DropDownSvg from './DropDownSvg';
    
    export default {
        name: "EducationForm",
        components: { DropDownSvg },
        props: ['degree_list'],
        
        data(){
            return{
                educations: [],
                degrees: this.degree_list,
                months:['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            }
        },
        computed:{
            years: () => { return Array(50).fill(2019).map((x, y) => x - y) },
        },
        
        methods:{
            add(){
                let empty = this.educations.filter(education => education.course_of_study === null || education.institution === null || education.degree === null);
                
                if(empty.length >= 1 && this.educations.length > 0) return;
                
                this.educations.push({
                    institution: null,
                    degree: null,
                    course_of_study: null,
                    from_month: null,
                    from_year: null,
                    to_month: null,
                    to_year: null,
                })
            },
            
            remove(){
                if(this.educations.length > 1) this.educations.pop();
            }
        },
        
        mounted() {
            this.add();
        }
    }
</script>