<template>
    <!--<input type="file" accept="image/*" @change="onChange">-->
    <div>
        <input type="file" accept="image/*" @change="onChange" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
        <label for="file"><span>Choose a file</span></label>
    </div>
</template>

<script>
    export default {
        methods: {
            onChange(e) {
                if (! e.target.files.length) return;

                let file = e.target.files[0];

                let reader = new FileReader();

                reader.readAsDataURL(file);

                reader.onload = e => {
                    let src = e.target.result;

                    this.$emit('loaded', { src, file });
                };
            }
        }
    }
</script>

<style scoped>
.inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}

.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: black;
    display: inline-block;
}

.inputfile:focus + label,
.inputfile + label:hover {
    background-color: red;
}

.inputfile + label {
	cursor: pointer; /* "hand" cursor */
}

.inputfile:focus + label {
	outline: 1px dotted #000;
	outline: -webkit-focus-ring-color auto 5px;
}
</style>
