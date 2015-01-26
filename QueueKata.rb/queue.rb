class Queue
  def initialize
    @items = []
    @count = 0
  end
  def empty
    @count == 0
  end
  def push(item)
    @items[@count] = item
    @count += 1
  end
  def pop()
    @count -= 1
    temp = @items[0]
    temp
  end
end

