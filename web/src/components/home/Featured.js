import React from 'react'
import Feature1 from '../../images/feature/feature_1.png'
import Feature2 from '../../images/feature/feature_2.png'
import Feature3 from '../../images/feature/feature_3.png'
import Feature4 from '../../images/feature/feature_4.png'


export default function Featured() {
    return (
        <section class="feature_part padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section_tittle text-center">
                            <h2>Featured Category</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-7 col-sm-6">
                        <div class="single_feature_post_text">
                            <p>Premium Quality</p>
                            <h3>Latest foam Sofa</h3>
                            <a href="#" class="feature_btn">EXPLORE NOW
                                <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                                </svg></a>
                            <img src={Feature1} alt="" />
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <div class="single_feature_post_text">
                            <p>Premium Quality</p>
                            <h3>Latest foam Sofa</h3>
                            <a href="#" class="feature_btn">EXPLORE NOW
                                <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                                </svg></a>
                            <img src={Feature2} alt="" />
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <div class="single_feature_post_text">
                            <p>Premium Quality</p>
                            <h3>Latest foam Sofa</h3>
                            <a href="#" class="feature_btn">EXPLORE NOW
                                <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                                </svg></a>
                            <img src={Feature3} alt="" />
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-6">
                        <div class="single_feature_post_text">
                            <p>Premium Quality</p>
                            <h3>Latest foam Sofa</h3>
                            <a href="#" class="feature_btn">EXPLORE NOW
                                <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                                </svg></a>
                            <img src={Feature4} alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

    )
}
