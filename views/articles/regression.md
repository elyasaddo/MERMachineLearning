# Regression
<hr>
### Introduction
Music emotion recognition (MER) is a complicated problem to resolve, but a lot of research is going into using different methodologies to reason about it. This article will focus on one methodology, *regression*, to help a machine effectively understand emotions connected to different kinds of music. Regression places data values on a continuous plane. In terms of MER, this plane contains many different emotions which have having a certain mood (determined by a Valence level) and intensity (determined by an Arousal level). For example, an excited mood will have a positive valence level with a very high arousal level whereas a sleepy mood will have a slightly negative valence level with a low arousal level. These moods are associated with specific segments of a 2D plane, with valence on the horizontal axis and arousal on the vertical axis. (see [Fig. 4.1](#Fig41)) We shall refer to this as the Arousal-Valence plane of emotion (Thayer, 1989).

#### Valence-Arousal Diagram #### {#Fig41 .center}
<figure markdown="1">
![Thayer's two-dimensional emotion plane](/assets/images/VADiagram.png)
<figcaption markdown="1">
  Figure 4.1: Adapted from: Russell, J. A. (1980). A circumplex model of affect. Journal of Personality and Social Psychology, 39, 1161–1178.
</figcaption>
</figure>

Using regression, it is a machine's job to map musical samples to their correct emotion on this plane. Another aspect of MER currently being looked into is the ability to improve how a machine analyses emotions over time. Throughout this article, I will look into the importance of communication between machines and humans, psychological issues related to emotions and properties of regression. I will then compare techniques that use regression and analyse how an MER machine can improve its evaluation process.

### Miscommunication ### {#MisC}
An interesting issue to consider when labelling a music sample with an emotion is the fact that not everyone will label the same music with the same emotion. For example, elderly people may not appreciate hip hop music as much as their younger counter parts, thus there is a concern that MER machines will provide conflicting emotions for certain samples. Yang et al. (2008) noted problems with applying certain adjectives to music as they can be ambiguous. Using ambiguous emotions will lead to miscommunication between the machine and the user when it comes to selecting a music sample for a specific emotion.[^2]

### Psychological Impact ### {#PsyIm}
Another problem we have to consider is the fact that different people will perceive different emotions for a music sample based on the experiences they had whilst listening to the music. Michael Stevens (2013) made a video noting the effects of nostalgia, and how music triggers different emotions because of certain memories. He goes on to state: &ldquo;Music is initially processed in the same regions of the brain that process memories and emotion&hellip;&rdquo;.[^1] Because of this, if something traumatic happens to you whilst listening to a music sample that could be happy in nature, you may perceive it as sad and distressing because it unearths memories you would rather not think about. This is a very subjective topic which machines will not be able to comprehend very well, even humans don’t fully understand the link between music, emotion and memories. These psychological issues make regression complicated to use as machines currently can’t perceive abstract concepts such as memories, thus they will struggle to adapt to problems involving them.

### Continuous vs. Discrete
When it comes to working with the Arousal-Valence plane there are a few problems researchers have to address. For example, the top right quadrant will contain areas for emotions such as happy, excited and thrilled. Despite their similarities they are still distinctively different emotions. Because of this, when working with the selection of a music sample's emotion on the Arousal-Valence plane, some researchers consider a continuous spectrum of emotions (Yang et al., 2008). Though it is significantly easier for humans to select emotions discretely (e.g. stating an emotion is happy rather than a coordinate on a plane), having each point measured in continuous quantities greatly eases the ambiguity issue.

### Time Intervals ### {#TimeCont}
The emotion of music can greatly vary over time. A piece of music could express a sad emotion, then change to a joyful one later on in the song. This problem can be remedied if we consider the emotions of different intervals of a piece of music, rather than one emotion for the whole duration.[^6] The VA values, corresponding to points on Thayer’s Arousal-Valence Plane, of set time intervals of a music sample (say 5 seconds) is recorded throughout the duration of the song. A song with a duration of 60 will have 12 associated VA values for each time interval (If a 5 second interval is used). A mean VA value is calculated from each interval’s VA values and used to calculate the overall emotion of the song.

### Support Vector Regression
There are quite a few systems in place that uses regression to analyse emotion in music. Han B. et al. (2009) researched the benefits of using a support vector regression (SVR) technique to perceive the emotion of music. They took a categorical approach by splitting the Arousal-Valence axis into 11 categories of emotions.[^5] Their SVR system analyses seven musical features: pitch, tempo, volume, tonality, key, rhythm and harmonics. The SVR system processes a specific music sample’s musical features and maps each feature to certain emotion categories on the Arousal-Valence plane such as calm, nervous, exited and sad. The system then creates vectors out of the evaluated musical features depending on the emotion each feature expressed. These vectors are mapped onto a polar coordinate system (similar in nature to the Cartesian Arousal-Valence plane). The SVR is able to effectively determine the mood of musical features by evaluating the categories on the Arousal-Valence plane their vector representation fall upon.
<figure markdown="1">
![Flow Chart](/assets/images/SVRFlowChart.png)
<figcaption>
  Figure 4.2: SVR flow chart
</figcaption>
</figure>

### Active Machine Learning ### {#ActLearning}
Support vector regression could be improved if more sophisticated machine learning elements were integrated into SVR systems. If the results of music emotion evaluations were stored, the system could use this bank when determining the nature of a new data piece. This method of machine learning is usually referred to as Active Learning. Simon Tong (2001) investigated the benefits of active learning. He noted that when analysing large sets of data, it can be quite time consuming for a machine to look through all features.[^7] Active learning features can allow machines to query results from previous data to evaluate future data. This vastly improves a MER machine as it is able to produce results with greater speed and learn how to analyse data more effectively at the same time.

### Linear Regression <!-- flag -->
Linear regression (LR) is another technique that utilises regression. Yu-An Chen et al. (2014) used a linear regression based learner for their MER machine.[^3] As noted before, different people can give varying emotions for the same music. Because of this, LR usually models the emotions a music sample expresses through Gaussian distribution. Techniques involving Gaussian distributions are other ways of mapping musical signals to their respective points on an Arousal-Valence plane. Yang et al. (2012) produced a technique <!--recheck --> called Acoustic Emotion Gaussians (AEG) which can be used to train a LR machine.[^9] This approach creates a set of acoustic features that, in MER, would map on to a set of VA values with the same number of elements using AEG. The VA values from the second set are used to plot points on the Arousal-Valence plane which is then used to determine an overall emotion.

### Regression Techniques Comparison
I have looked into 2 techniques that use regression to implement MER machines.  They are similar in the fact they both use a continuous model and Thayer’s Arousal-Valence plane. The table below will list a few advantages and disadvantages tied to these techniques.

#### Linear Regression #### {.center}

Advantages | Disadvantages
---------- | -------------
Works well with speech recognition when little data input is used.[^3] This will aid the machine when analysing vocal features. | Support Vector Regression has a higher prediction accuracy.[^2]
 | AEG is still in the process of implementing more features (such as lyric analysis) to aid Linear Regression systems.[^9]

#### Support Vector Regression #### {.center}

Advantages | Disadvantages
---------- | -------------
Active learning could be used alongside an SVR learner to improve its evaluation process. | The use of discrete emotion segments on the Arousal-Valence plane introduces a level of ambiguity which can prove problematic.
SVR use of a polar plane to represent the Arousal-Valence plane has greatly increased the accuracy of MER machines.[^10] |

### Conclusion
Regression has proven itself to be a very useful methodology when it comes to giving machines the necessary tools to reason about emotions and music. It addresses problems on clarity of results (miscommunication between users) through a continuous plane. Regression helps improve the applications of MER machines by implementing features such as time interval analysis. SVR and LR are regression techniques which apply quite different processes. They both show promising results brought about by the implementation of regression.[^5] [^3] These technique show the possibility for advancements in the incorporation of machine learning algorithms such as those which use active learning. Though the practice of using ML algorithms in MER is in its early stages, it is clear that ML could go on to improve our understanding of the relationship between music and emotions.


### References
[^1]: Stevens, M. (2013) *Why Do We Feel Nostalgia?* [Video] Available from: [https://www.youtube.com/watch?v=coGfGmOeLjE](https://www.youtube.com/watch?v=coGfGmOeLjE) [Accessed 15/02/2015].

[^2]: Yang , Y., Lin , Y., Su , Y. &amp; Chen , H. (2008) A Regression Approach to Music Emotion Recognition. *IEEE Transactions on Audio, Speech, and Language Processing.* 16 (2), 1-1-10.

[^3]: Chen, Y., Wang, J., Yang, Y. &amp; Chen, H. (2014) Linear regression-based adaptation of music emotion recognition models for personalization. *2014 IEEE International Conference on Acoustic, Speech and Signal Processing.* [Online], 09/03/2015. Available from: [http://ieeexplore.ieee.org/stamp/stam&hellip;](http://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&amp;arnumber=6853979&amp;tag=1) [Accessed 09/03/2015].

[^4]: Gaetano, V., Luca , C., Riccardo , B., Antonio , L. &amp; Enzo , P. (2014) Revealing Real-Time Emotional Responses: a Personalized Assessment based on Heartbeat Dynamics. *Scientific Reports.* [Online] 4 (4998), 22/02/2015. Available from: [http://www.nature.com/srep/2014/1405&hellip;](http://www.nature.com/srep/2014/140518/srep04998/full/srep04998.html) [Accessed 22/02/2015].

[^5]: Han , B., Rho , S., Dannenberg , R. &amp; Hwang , E. (2009) Smers: Music emotion recognition using support vector regression. *10th International Society for Music Information Retrieval Conference.*.

[^6]: Kim, Y., Schmidt , E., Migneco, R., Morton, B., Richardson , P., Scott , J., Speck , J. &amp; Turnbull , D. (2010) *Music Emotion Recognition: A State Of The Art Review.* Computer Science. Drexel University.

[^7]: Tong , S. (2001) *Active Learning: Theory and Applications.* Philosophy. Stanford university.

[^8]: Thayer, R. E. (1989) The Biopsychology of Mood and Arousal. *New York Oxford University Press.*.

[^9]: Wang, J., Yang, Y., Wang, H. &amp; Jeng, S. (2012) *The acoustic emotion Gaussians model for emotion-based music annotation and retrieval.* Department of Electrical Engineering. National Taiwan University.

[^10]: Barthet, M., Fazekas, G. &amp; Sandler, M. (2013) *Music Emotion Recognition: From Content- to Context- Based Models.* Centre of Digital Music. Queen Mary University of London.

*[SVR]: Support Vector Regression.
*[LR]: Linear Regression.
*[AEG]: Acoustic Emotion Gaussians.
*[VA]: Valence-Arousal
