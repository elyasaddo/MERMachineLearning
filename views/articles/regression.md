Music emotion recognition is a complicated problem to resolve, but a lot of research is going into using different methodologies to reason about it. This article will focus on one methodology, *regression*, to help a machine effectively understand emotions connected to different kinds of music. Regression specifies different emotions as having a certain mood (determined by a Valence level) and intensity (determined by an Arousal level). For example, an excited mood will have a positive valence level with a very high arousal level while a sleepy mood will have a slightly negative valence level with a low arousal level. These moods are associated with specific segments of a 2D plane, with valence on the horizontal axis and arousal on the vertical axis. (see Fig. 4.1) <!-- and add link --> We shall refer to this as the arousal-valence plane of emotion (Thayer, 1989). Using regression, it is a machine's job to establish the correct emotions on this plane to their respective musical samples. Another important aspect of the machine which is in early days of research, is the ability to improve how it analyses emotions over time. Throughout this article I will look into the importance of communication between machines and humans, Psychological issues related to emotions, properties of regression, a comparison of techniques that use regression and an analysis of how a MER machine can improve its evaluation process.
<!-- change image tag to mark down -->
<img src="http://www.nature.com/srep/2014/140518/srep04998/images_article/srep04998-f1.jpg">
<!-- change image to elliot's image -->
The arousal-valence plane proposed by Thayer. [REF WEBSITE]

###Miscommunication
An interesting issue to consider when labelling a music sample with an emotion, is the fact that not everyone will label the same music with the same emotion. For example, elderly people may not appreciate hip hop music as much as their younger counter parts, thus there is a concern that MER machines will provide conflicting emotions for certain samples. Yang et al. (2008) noted problems with applying certain adjectives to music as they can be ambiguous with varying interpretations. Using ambiguous emotions will lead to miscommunication between the machine and the user when it comes to selecting a music sample for a specific emotion.[REF YANG]

###Psychological Impact
Another problem we have to consider is the fact that different people will perceive different emotions for a music sample based on experiences they had whilst listening to the music. Michael Stevens (2013) made a video noting the effects of nostalgia and how music triggers different emotions because of emotive memories. He goes on to state: “Music is initially processed in the same regions of the brain that process memories and emotion&hellip;” [REF VSAUCE]. Because of this if something traumatic happens to you whilst listening to a music sample that could be happy in nature, you may perceive it as sad and distressing because it unearths memories you would rather not think about. This is a very subjective topic which machines will not be able to comprehend very well, even humans don’t fully understand the link between music, emotion and memories. These psychological issues make regression complicated to use as machines currently can’t perceive abstract concepts such as memories, thus they will struggle to adapt to problems involving them.

###Continuous vs Discrete
When it comes to working with the arousal-valence plane there are a few problems researchers have to address. We already discussed the problem of emotions being ambiguous in nature. For example, the top right quadrant will contain areas for emotions such as happy, excited and thrilled. Despite their similarities they are still distinctively different emotions. Because of this, when working with the selection of a music sample's emotion on the arousal-valence plane some researchers consider a continuous spectrum of emotions (Yang et al., 2008). This means that each point can be measured in continuous quantities rather discrete one, thus greatly easing the ambiguity issue.

###Time Intervals
The emotion of music can greatly vary over time. A piece of music could express a sad emotion and change to a joyful one later on in the song. This problem can be remedied if we consider the emotions of different intervals of a piece of music rather than one emotion for the whole song [REF REVIEW]. The VA values, corresponding to points on Thayer’s arousal-valence place, of set time intervals of a music sample (say 5 seconds) is recorded throughout the duration of the song. A song with a duration of 60 will have 12 associated VA values for each time interval (If a 5 second interval is used). A mean VA value is calculated from each interval’s VA values and used to calculate the overall emotion of the song.

###Support Vector Regression
There are quite a few systems in place that uses regression to analyse emotion in music. Han B. et al. (2009) researched the benefits of using a support vector regression (SVR) technique to perceive the emotion of music. They took a categorical approach by splitting the arousal-valence axis into 11 categories of emotions [REF HAN B.]. Their SVR system analyses seven musical features: pitch, tempo, volume, tonality, key, rhythm and harmonics. The SVR system analyses a specific music sample’s musical features and maps each feature to certain emotion categories on the arousal-valence axis such as calm, nervous, exited and sad. The system then creates vectors out of the evaluated musical features depending on the emotion each feature expressed. These vectors are mapped onto a polar coordinate system (similar in nature to the Cartesian arousal-valence axis). Each vector is associated with a distance from the origin (0, 0) and an angle from the x axis to the vector. The SVR is able to effectively analyse the mood of musical features by evaluating the categories on the arousal-valence axis their vector representation fall upon.
<!-- Flow chart  -->
<img src="assets\images\SVR flow chart.png">

###Active Machine Learning
Support vector regression could be improved if more sophisticated machine learning features were implemented into SVR systems. As these systems constantly analyse emotions of a sample’s musical features, it could be possible for the system to memorise results of music emotion evaluations. Next time the system tries to analyse a sample it could reference a bank of memorised results to produce more accurate predictions of any sample’s emotion. This method of machine learning is usually referred to as Active learning. Simon Tong (2001) investigated the many benefits of active learning. He notes that when analysing large sets of data, musical features in the case of SVR, it can be quite time consuming for a machine to look through them all [SIMON TONG REF]. Active learning features can allow machines to query results from previous data to evaluate future data. This vastly improves a MER machine as it is able to produce results with greater speed and learn how to analyse data more effectively at the same time.

###Linear Regression
Linear regression (LR) is another technique that utilises regression. Yu-An Chen et al. (2014) used a linear regression based learner for their MER machine [CHEN REF]. As noted before, different people can give varying emotions for the same music. Because of this LR usually models the emotions a music sample expresses through Gaussian distribution. Techniques involving Gaussian distributions is another way of mapping musical signals to their respective points on an arousal-valence plane. Yang et al (2012) produced an approach called Acoustic Emotion Gaussians (AEG) that can be used to train a LR machine [YANG AEG REF]. This approach creates a set of acoustic features that maps on to a set of VA emotion values with the same number of elements. The acoustic features are mapped into a vector using AEG which is then mapped onto an arousal-valence plane. The coordinates on the plane make up the VA emotion values of the second set which is used to produce the overall emotion of the song.

###Regression Techniques Comparison
I have looked into 2 techniques that use regression to implement MER machines. They both strive to achieve the same goal with different processes. They are similar in the fact they both use a continuous model and Thayer’s arousal-valence plane. The table below will list a few advantages tied to these techniques.

Learner technique           | Emotion Space | Advantages
-------------               | -----------   | -------  
Linear Regression           | Continuous    | works well with speech recognition when little data input is used.
Support Vector Regression   | Continuous    | Active learning can be utilised to a SVR learner to improve its evaluation process

###Conclusion
Regression has proven itself to be a very useful methodology when it comes to giving machines the necessary tools they need to reason about emotions and music. Regression helps progress the applications of MER machines by implementing features such as the analysis of emotions in specific time intervals and the use of an unambiguous arousal-valence plane. The techniques that utilise regression show the possibility for many advancements in the incorporation of machine learning algorithms. Such algorithms that could use active learning to train machines to improve themselves, are still in early days of development. But research into this field shows there are endless possibilities of what could be achieved with regression and music emotion recognition.




*[SVR]: Support Vector Regression.
*[LR]: Linear Regression.
*[AEG]: Acoustic Emotion Gaussians.


##References
<p style= "line-height: 1">[1] Michal,S. (2013) <I><B>Why Do We Feel Nostalgia? </B>. </I>[Video] Available from: <a href="https://www.youtube.com/watch?v=coGfGmOeLjE" TARGET="_blank">https://www.youtube.com/watch?v=coGfGmOeLjE</a> [Accessed 15/02/2015].
<p style= "line-height: 1">[2] Yang , Y., Lin , Y., Su , Y. &amp; Chen , H. (2008) A Regression Approach to Music Emotion Recognition. <I>IEEE Transactions on Audio, Speech, and Language Processing. </I>16 (2), 1-1-10.
<p style= "line-height: 1">
