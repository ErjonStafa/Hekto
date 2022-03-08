<div class="w-1/4 flex justify-center items-center shadow-custom mt-24">
    <div class="w-10/12 py-10 flex flex-col justify-center items-center">
        <div >
            <x-home-components.body-components.section-title :text="'Register'" />
        </div>
        <div class="text-[#8D92A7] mt-3">
            <x-home-components.body-components.descriptions :text="'Please sign up using account detail below.'" />
        </div>
        <div class="w-full mt-3">
            <x-contact-us-components.input :type="'text'" :name="'new-username'" :placeholder="'Email Address'"/>
        </div>
        <div class="w-full mt-3">
            <x-contact-us-components.input :type="'password'" :name="'new-password'" :placeholder="'Password'"/>
        </div>
        <div class="w-full mt-3">
            <x-contact-us-components.input :type="'password'" :name="'confirm-new-password'" :placeholder="'Confirm password'"/>
        </div>
        <div class="bg-pink text-white 2xl:text-base md:text-sm text-xs w-full 2xl:h-12 lg:h-10 md:h-8 h-8 2xl:leading-10 xl:leading-9 md:leading-8 leading-8 rounded-sm flex justify-center text-center mt-3">
            <a href="pages/my-account/sign-up" class="w-full h-full">
                Sign up
            </a>
        </div>
        <div class="font-lato flex 2xl:text-base lg:text-sm sm:text-xs text-[#8D92A7] mt-3">
            Already have an Account? <div id="sign-in" class="cursor-pointer font-semibold">Login</div>
        </div>

    </div>
</div>