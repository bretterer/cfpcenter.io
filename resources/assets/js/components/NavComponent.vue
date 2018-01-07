<style lang='scss'>

</style>
<template>
    <div>
        <nav class="flex items-center justify-between flex-wrap bg-blue-darker p-6">
            <div class="flex items-center flex-no-shrink text-white mr-6">
                <h1 class="font-thin">CentralCfp.io</h1>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
                    <h1 class="font-thin">CentralCfp.io</h1>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="#responsive-header" class="no-underline block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                        Conferences
                      </a>
                    <a href="#responsive-header" class="no-underline block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                        About
                    </a>
                </div>
            </div>
        </nav>
    </div>
</template>
<script>
  import axios from 'axios';

  export default {};
</script>