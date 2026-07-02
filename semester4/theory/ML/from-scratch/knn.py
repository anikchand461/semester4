import numpy as np
from collections import Counter

class KNN:
    def __init__(self, k=3, dist='eucledean'):
        self.k = k
        self.X_train = None
        self.y_train = None
        self.dist = dist

    def euclidean_distance(self, a, b):
        return np.sqrt(np.sum((a - b) ** 2))

    def manhattan_distance(self, a, b):
        return np.sum(np.abs(a-b))

    def fit(self, X_train, y_train):
        self.X_train = X_train
        self.y_train = y_train.to_numpy()

    def predict(self, X_test):
        y_pred = []

        for x in X_test:
            distances = []

            for i in range(len(self.X_train)):
                if self.dist == 'manhattan':
                    d = self.manhattan_distance(x, self.X_train[i])
                else:
                    d = self.euclidean_distance(x, self.X_train[i])
                distances.append((d, self.y_train[i]))

            distances.sort()
            k_nearest = distances[:self.k]

            labels = [label for _, label in k_nearest]

            counter = Counter(labels)
            prediction = counter.most_common(1)[0][0]

            y_pred.append(prediction)

        return np.array(y_pred)