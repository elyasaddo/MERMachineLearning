#Regression

Music emotion recognition is a complicated problem to resolve but a lot of research is going into using different methodologies to reason about it.
This article will focus on one methodology, regression, to aid a machine better understand emotions connected to different kinds of music.
Regression specifies different emotions as having a certain mood (determined by a Valence level) and intensity (determined by an Arousal level). For example, an excited mood will have a positive valence level with a very high arousal level while a sleepy mood will have a slightly negative valence level with a low arousal level. These moods are associated with specific segments of a 2D plane, with valence on the horizontal axis and arousal on the vertical axis. We shall refer to this as the arousal-valence plane of emotion (Thayer, 1989). Using regression, it is a machine's job to match musical samples to their correct emotion on this plane. Our machine must also be able to return music determined by a selected mood. This may seem relatively straight forward but there are some psychological implications that makes this process difficult.

An interesting issue to consider when labelling a music sample with an emotion, is the fact that not everyone will label the same music with the same emotion. For example, elderly people may not appreciate hip hop music as much as their younger counter parts, thus giving conflicting emotions for certain samples. Yang et al (2008) noted problems with applying certain adjectives to music as they can be ambiguous with varying interpretations. Using ambiguous emotions will lead to miscommunication between the machine and the user when it comes to selecting a music sample for a specific emotion. Another problem we have to consider is the fact that different people will perceive different emotions for a music sample based on experiences they had when listening to the music. Michael Stevens (2013) made a great video noting the effects of nostalgia and how music triggers different emotions because of nostalgic memories. He goes on to state: “Music is initially processed in the same regions of the brain that process memories and emotion…” [1]. Because of this if something traumatic happens to you when listening to a music sample that could be happy in nature, you may perceive it as sad and distressing because it unearths memories you would rather not think about. This is a very subjective topic which computers will not be able to comprehend very well, even humans don’t fully understand the link between music, emotion and memories. These psychological topics make regression complicated to use as machines currently can’t perceive abstract concepts such as memories.

When it comes to working with the AV plane there are a few problems we have to address. We already discussed the problem of emotions being ambiguous in nature. For example the top right quadrant will contain areas for emotions such as happy, excited and thrilled. Despite their similarities they are still distinctively different emotions. Because of this, when working with the selection of a music samples emotion on the AV plane we will consider a continuous spectrum of emotions (Charanya & Vijayalakshmi, 2015). Now each point can be measured in continuous quantities rather discrete one, thus greatly easing the ambiguity issue. 

<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<body>

<style type="text/css">
<!--
.TF
{
FONT-SIZE: 12px;
FONT-FAMILY: verdana,arial,helvetica
}
--></style>
<font class=TF>

<p align="center">References
<p align="center">
<p style= "line-height: 1">[1] Michal,S. (2013) <I><B>Why Do We Feel Nostalgia? </B>. </I>[Video] Available from: <a href="https://www.youtube.com/watch?v=coGfGmOeLjE" TARGET="_blank">https://www.youtube.com/watch?v=coGfGmOeLjE</a> [Accessed 15/02/2015].
<p style= "line-height: 1">[2] Yang , Y., Lin , Y., Su , Y. &amp; Chen , H. (2008) A Regression Approach to Music Emotion Recognition. <I>IEEE Transactions on Audio, Speech, and Language Processing. </I>16 (2), 1-1-10.
<p style= "line-height: 1">
</font>
</body>
</html>
