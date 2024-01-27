import sys

correct = sys.argv[1]
wriiten = sys.argv[2]


sentences = [
    Outputs,
    Outputs
]


from sentence_transformers import SentenceTransformer
import pandas as pd

model= SentenceTransformer('nli-distilroberta-base-v2')
sentence_embeddings= model.encode(sentences)

sentence_embeddings.shape
len(sentence_embeddings[0])


from sklearn.metrics.pairwise import cosine_similarity

cosine_similarity(
    [sentence_embeddings[0]],
    sentence_embeddings[1:]
)

similarity_score= cosine_similarity(
    [sentence_embeddings[0]],
    sentence_embeddings[1:]
).flatten()

print(similarity_score)
#pd.DataFrame({"Sentences": sentences[1:],"similarity": similarity_score })
