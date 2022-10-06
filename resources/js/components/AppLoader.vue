<template>
    <div class="loader-overlay">
        <div class="spinner-border text-info" role="status">
        </div>
    </div>
</template>

<script>
export default {
    name: "AppLoader",
}
</script>

<style scoped lang="scss">
.loader-overlay{
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: fixed;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9;

    .spinner-border{
        width: 100px;
        height: 100px;
    }
}
</style>