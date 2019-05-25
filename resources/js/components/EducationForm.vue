<template>
    <div class="flex flex-wrap -mx-3 mb-6 border rounded">
        <div class="section-head">
            Educational History
        </div>
        
        <div class="w-full" v-for="(education, index) in educations" v-bind:key="index">
            
            <!-- Institution -->
            <div class="w-full px-3 mb-4 md:mb-0">
                <label for="institution" class="labels">
                    Institution and Location <span class="text-red">*</span>
                </label>
                <input type="text" name="institution" id="institution" required class="inputs" placeholder="African University of Science and Technology, Abuja">
            </div>
            
            <!-- Degree -->
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                <label for="degree" class="labels">
                    Degree <span class="text-red">*</span>
                </label>
        
                <div class="relative">
                    <select name="degree" id="degree" class="selects">
                        <option value="">Select Degree</option>
                        <option v-for="degree in degrees" value="degree.value">{{ degree.label}} </option>
                    </select>
                    <drop-down-svg></drop-down-svg>
                </div>
            </div>
    
            <!-- Course of Study -->
            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                <label for="course_of_study" class="labels">
                    Course of Study <span class="text-red">*</span>
                </label>
        
                <input type="text" name="course_of_study" id="course_of_study" required class="inputs" placeholder="Computer Science">
            </div>
    
            <!-- From -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label for="from_month" class="labels">
                    Start Date <span class="text-red">*</span>
                </label>
        
                <div class="flex">
                    <div class="relative">
                        <select name="from_month" id="from_month" class="selects">
                            <option value="">Select Month</option>
                            <option v-for="month in months" value="month.value">{{ month.label }}</option>
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>
            
                    <div class="relative ml-3">
                        <select name="from_year" id="from_year" class="selects">
                            <option value="">Select Year</option>
                            <option v-for="year in years" value="year.value"> {{ year.label }} </option>
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>
                </div>
            </div>
    
            <!-- To -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label for="to_month" class="labels">
                    Graduation Date <span class="text-red">*</span>
                </label>
        
                <div class="flex">
                    <div class="relative">
                        <select name="to_month" id="to_month" class="selects">
                            <option value="">Select Month</option>
                            <option v-for="month in months" value="month.value">{{ month.label }}</option>
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>
            
                    <div class="relative ml-3">
                        <select name="to_year" id="to_year" class="selects">
                            <option value="">Select Year</option>
                            <option v-for="year in years" value="year.value"> {{ year.label }} </option>
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import DropDownSvg from './DropDownSvg';
    
    export default {
        name: "EducationForm",
        components: { DropDownSvg },
        data(){
            return{
                educations: [],
                degrees:[{ label: 'Bachelor', value: 1 }, { label: 'Master', value: 2 }],
                months:[{ label: 'January', value: 1 }, { label: 'February', value: 2 }],
                years:[{ label: '2017', value: 2017 }, { label: '2018', value: 2018 }],
            }
        },
        
        methods:{
            add(){
                let empty = this.educations.length < 1;
                
                if(!empty) return;
                
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
            
            }
        },
        
        mounted() {
            this.add();
        }
    }
</script>