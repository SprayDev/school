<template>
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >Название школы</label>
                <input type="text" class="form-control" name="name" placeholder="Название">
            </div>
            <div class="form-group col-md-6">
                <label >Почтовый адрес</label>
                <input type="email" class="form-control" name="email" placeholder="Почта">
            </div>
        </div>
        <div class="form-group">
            <label>website</label>
            <input type="text" class="form-control" name="website" placeholder="Сайт школы">
        </div>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
</template>

<script>
export default {
    name: "SchoolCreate"
}
</script>

<style scoped>

</style>
